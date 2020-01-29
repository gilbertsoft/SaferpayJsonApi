<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\Transaction;

use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class CaptureRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Capture';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Interfaces\Transaction\CaptureResponse';

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\TransactionReference
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\TransactionReference $transactionReference
     * @return CaptureRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
