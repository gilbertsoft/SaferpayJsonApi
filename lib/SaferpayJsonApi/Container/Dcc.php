<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Dcc
{
    /**
     * @var Gilbertsoft\SaferPayApi\Container\Amount
     * @SerializedName("PayerAmount")
     * @Type("Gilbertsoft\SaferPayApi\Container\Amount")
     */
    protected $payerAmount;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\Amount
     */
    public function getPayerAmount()
    {
        return $this->payerAmount;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\Amount $payerAmount
     * @return Dcc
     */
    public function setPayerAmount($payerAmount)
    {
        $this->payerAmount = $payerAmount;

        return $this;
    }
}
