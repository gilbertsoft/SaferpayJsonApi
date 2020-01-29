<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Transaction;

use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class CancelRequest extends Request
{
    const API_PATH = '/Payment/v1/Transaction/Cancel';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Transaction\CancelResponse';

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
     * @return CancelRequest
     */
    public function setTransactionReference($transactionReference)
    {
        $this->transactionReference = $transactionReference;

        return $this;
    }
}
