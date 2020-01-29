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
    protected $retryIndicator = 0;

    /**
     * @return string
     */
    public function getSpecVersion()
    {
        return $this->specVersion;
    }

    /**
     * @param string $specVersion
     * @return Header
     */
    public function setSpecVersion($specVersion)
    {
        $this->specVersion = $specVersion;

        return $this;
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
     * @return Header
     * @throws InvalidArgumentException
     */
    public function setCustomerId($customerId)
    {
        // try to extract the CustomerID if the AccountID was given
        if ($pos = strpos($customerId, '-') !== false) {
            $customerId = substr($customerId, 0, $pos);
        }

        // verify for numeric digits only
        if (!ctype_digit($customerId)) {
            throw new \InvalidArgumentException(sprinf(
                'Error parameter "customerId" expects a numeric value, "%s" was given.',
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
     * @return Header
     */
    public function setRequestId($requestId)
    {
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
        $this->retryIndicator = $retryIndicator;

        return $this;
    }
}
