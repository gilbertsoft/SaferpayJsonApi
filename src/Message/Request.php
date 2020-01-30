<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Message;

use Buzz\Browser;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Gilbertsoft\SaferpayJsonApi\Container\RequestHeader;
use Gilbertsoft\SaferpayJsonApi\Exception\HttpRequestException;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\SerializerBuilder;

abstract class Request
{
    const ROOT_URL = 'https://www.saferpay.com/api/';

    const ROOT_URL_TEST = 'https://test.saferpay.com/api/';

    const ERROR_RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Message\ErrorResponse';

    /**
     * @var string
     * @Exclude
     */
    protected $apiKey;

    /**
     * @var string
     * @Exclude
     */
    protected $apiSecret;

    /**
     * @var bool
     * @Exclude
     */
    protected $test = false;

    /**
     * @var Buzz\Browser
     * @Exclude
     */
    protected $browser;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\RequestHeader
     * @SerializedName("RequestHeader")
     */
    protected $requestHeader;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $apiSecret
     * @param bool $test
     */
    public function __construct($apiKey = null, $apiSecret = null, $test = true, Browser $browser = null)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->test = $test;

        $this->setBrowser($browser);
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return Request
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @param string $apiSecret
     * @return Request
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @param bool $test
     * @return Request
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\RequestHeader $requestHeader
     * @return Request
     */
    public function setRequestHeader(RequestHeader $requestHeader)
    {
        $this->requestHeader = $requestHeader;

        return $this;
    }

    /**
     * Set browser
     *
     * @param  Browser $browser
     * @return $this
     */
    public function setBrowser(Browser $browser = null)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return Browser
     */
    public function getBrowser()
    {
        if (null == $this->browser) {
            return new Browser();
        }

        return $this->browser;
    }

    /**
     * Execute request
     *
     * @throws HttpRequestException
     * @return Gilbertsoft\SaferpayJsonApi\Message\Response
     */
    public function execute()
    {
        try {
            $response = $this->getBrowser()->post(
                $this->getUrl(),
                $this->getHeaders(),
                $this->getContent()
            );
        } catch (\Exception $e) {
            throw new HttpRequestException($e->getMessage());
        }

        if ($response->isClientError()) {
            return $this->getSerializer()->deserialize($response->getContent(), static::ERROR_RESPONSE_CLASS, 'json');
        }

        if (200 !== $response->getStatusCode()) {
            throw new HttpRequestException(sprintf('Unexpected http request response with status code %s.', $response->getStatusCode()));
        }

        return $this->getSerializer()->deserialize($response->getContent(), static::RESPONSE_CLASS, 'json');
    }

    /**
     * Get url of request
     *
     * @return string
     */
    protected function getUrl()
    {
        if ($this->isTest()) {
            $rootUrl = self::ROOT_URL_TEST;
        } else {
            $rootUrl = self::ROOT_URL;
        }

        return $rootUrl . static::API_PATH;
    }

    /**
     * Get headers of request
     *
     * @return array
     */
    protected function getHeaders()
    {
        return [
            'Content-Type' => 'application/json; charset=utf-8',
            'Accept' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode($this->apiKey . ':' . $this->apiSecret)
        ];
    }

    /**
     * Get content of request
     *
     * @return string
     */
    protected function getContent()
    {
        return $this->getSerializer()->serialize($this, 'json');
    }

    /**
     * Get serializer
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getSerializer()
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
