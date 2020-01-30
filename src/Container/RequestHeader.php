<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;

class RequestHeader
{
    /**
     * @var string
     * @SerializedName("SpecVersion")
     */
    protected $specVersion = '1.15';

    /**
     * @var string
     * @SerializedName("CustomerId")
     */
    protected $customerId;

    /**
     * @var string
     * @SerializedName("RequestId")
     */
    protected $requestId;

    /**
     * @var int
     * @SerializedName("RetryIndicator")
     */
    protected $retryIndicator;

    /**
     * @var ClientInfo
     * @SkipWhenEmpty
     * @SerializedName("ClientInfo")
     */
    protected $clientInfo;

    /**
     * Constructor
     *
     * @param string $shopInfo
     * @param string $osInfo
     */
    public function __construct($customerId, $requestId, $retryIndicator = 0, $clientInfo = null)
    {
        $this->setCustomerId($customerId);
        $this->setRequestId($requestId);
        $this->setRetryIndicator($retryIndicator);
        $this->setClientInfo($clientInfo);
    }

    /**
     * @return string
     */
    public function getSpecVersion()
    {
        return $this->specVersion;
    }

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     * @throws InvalidArgumentException
     * @return Header
     */
    public function setCustomerId($customerId)
    {
        // try to extract the CustomerID if the AccountID was given
        if ($pos = strpos($customerId, '-') !== false) {
            $customerId = substr($customerId, 0, $pos);
        }

        // verify for numeric digits only
        if (!ctype_digit($customerId)) {
            throw new \InvalidArgumentException(sprintf(
                'Error property "customerId" expects a numeric value, "%s" was given.',
                $customerId
            ));
        }

        // verify number of digits
        if (strlen($customerId) > 8 || strlen($customerId) == 0) {
            throw new \InvalidArgumentException(sprintf(
                'Error property "customerId" expects 1 to 8 digits, "%s" was given.',
                $customerId
            ));
        }

        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @throws InvalidArgumentException
     * @return Header
     */
    public function setRequestId($requestId)
    {
        // verify number of chars
        if (strlen($requestId) > 50 || strlen($requestId) == 0) {
            throw new \InvalidArgumentException(sprintf(
                'Error property "requestId" expects 1 to 50 characters, "%s" was given.',
                $requestId
            ));
        }

        $this->requestId = $requestId;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetryIndicator()
    {
        return $this->retryIndicator;
    }

    /**
     * @param int $retryIndicator
     * @return Header
     */
    public function setRetryIndicator($retryIndicator)
    {
        // verify range
        if ($retryIndicator < 0 || $retryIndicator > 9) {
            throw new \InvalidArgumentException(sprintf(
                'Error property "retryIndicator" expects a value between 0 to 9, "%d" was given.',
                $retryIndicator
            ));
        }

        $this->retryIndicator = $retryIndicator;

        return $this;
    }

    /**
     * @return ClientInfo
     */
    public function getClientInfo()
    {
        return $this->clientInfo;
    }

    /**
     * @param ClientInfo $retryIndicator
     * @return Header
     */
    public function setClientInfo($clientInfo)
    {
        $this->clientInfo = $clientInfo;

        return $this;
    }
}
