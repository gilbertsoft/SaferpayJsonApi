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

class Dcc
{
    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Amount
     * @SerializedName("PayerAmount")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Amount")
     */
    protected $payerAmount;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Amount
     */
    public function getPayerAmount()
    {
        return $this->payerAmount;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Amount $payerAmount
     * @return Dcc
     */
    public function setPayerAmount($payerAmount)
    {
        $this->payerAmount = $payerAmount;

        return $this;
    }
}
