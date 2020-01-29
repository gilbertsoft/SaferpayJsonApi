<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;

class Payment
{
    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Amount
     * @SerializedName("Amount")
     */
    protected $amount;

    /**
     * @var string
     * @SerializedName("OrderId")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Description")
     */
    protected $description;

    /**
     * @var string
     * @SerializedName("PayerNote")
     */
    protected $payerNote;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Amount $amount
     * @return Payment
     */
    public function setAmount(Amount $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return Payment
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Payment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayerNote()
    {
        return $this->payerNote;
    }

    /**
     * @param string $payerNote
     * @return Payment
     */
    public function setPayerNote($payerNote)
    {
        $this->payerNote = $payerNote;

        return $this;
    }
}
