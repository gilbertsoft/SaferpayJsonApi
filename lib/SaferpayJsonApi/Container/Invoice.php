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

class Invoice
{
    /**
     * @var Gilbertsoft\SaferPayApi\Container\Payee
     * @SerializedName("Payee")
     * @Type("Gilbertsoft\SaferPayApi\Container\Payee")
     */
    protected $payee;

    /**
     * @var string
     * @SerializedName("ReasonForTransfer")
     * @Type("string")
     */
    protected $reasonForTransfer;

    /**
     * @var string
     * @SerializedName("DueDate")
     * @Type("string")
     */
    protected $dueDate;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\Payee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\Payee $payee
     * @return Invoice
     */
    public function setPayee(Payee $payee)
    {
        $this->payee = $payee;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonForTransfer()
    {
        return $this->reasonForTransfer;
    }

    /**
     * @param string $reasonForTransfer
     * @return Invoice
     */
    public function setReasonForTransfer($reasonForTransfer)
    {
        $this->reasonForTransfer = $reasonForTransfer;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return Invoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }
}
