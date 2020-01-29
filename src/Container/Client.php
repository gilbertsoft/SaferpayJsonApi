<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Client
{
    /**
     * @var string
     * @SkipWhenEmpty
     * @SerializedName("ShopInfo")
     * @Type("string")
     */
    private $shopInfo;

    /**
     * @var string
     * @SkipWhenEmpty
     * @SerializedName("OsInfo")
     * @Type("string")
     */
    private $osInfo;

    /**
     * Constructor
     *
     * @param string $apiKey
     * @param string $apiSecret
     * @param bool $test
     */
    public function __construct($shopInfo = '', $osInfo = '')
    {
        $this->setShopInfo($shopInfo);
        $this->setOsInfo($osInfo);
    }

    /**
     * @return string
     */
    public function getShopInfo()
    {
        return $this->shopInfo;
    }

    /**
     * @param string $shopInfo
     * @return Client
     */
    public function setShopInfo($shopInfo)
    {
        $this->shopInfo = substr($shopInfo, 0, 100);

        return $this;
    }

    /**
     * @return string
     */
    public function getOsInfo()
    {
        return $this->osInfo;
    }

    /**
     * @param string $osInfo
     * @return Client
     */
    public function setOsInfo($osInfo)
    {
        $this->osInfo = substr($osInfo, 0, 100);

        return $this;
    }
}
