<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\Transaction;

use Gilbertsoft\SaferPayApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class CancelRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Cancel';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferPayApi\Transaction\CancelResponse';

    /**
     * @var Gilbertsoft\SaferPayApi\Container\TransactionReference
     * @SerializedName("TransactionReference")
     */
    protected $transactionReference;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\TransactionReference
     */
    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\TransactionReference $transactionReference
     * @return CancelRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
