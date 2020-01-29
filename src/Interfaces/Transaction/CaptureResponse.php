<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\Transaction;

use Gilbertsoft\SaferpayJsonApi\Container\Invoice;
use Gilbertsoft\SaferpayJsonApi\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CaptureResponse extends Response
{
    /**
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    protected $transactionId;

    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    protected $orderId;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    protected $date;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Invoice
     * @SerializedName("Invoice")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Invoice")
     */
    protected $invoice;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return CaptureResponse
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

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
     * @return CaptureResponse
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return CaptureResponse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Invoice $invoice
     * @return CaptureResponse
     */
    public function setInvoice(Invoice $invoice)
    {
        $this->invoice = $invoice;

        return $this;
    }
}
