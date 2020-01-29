<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\PaymentPage;

use Gilbertsoft\SaferPayApi\Container\Payer;
use Gilbertsoft\SaferPayApi\Container\PaymentMeans;
use Gilbertsoft\SaferPayApi\Container\RegistrationResult;
use Gilbertsoft\SaferPayApi\Container\ThreeDs;
use Gilbertsoft\SaferPayApi\Container\Transaction;
use Gilbertsoft\SaferPayApi\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AssertResponse extends Response
{
    /**
     * @var Gilbertsoft\SaferPayApi\Container\Transaction
     * @SerializedName("Transaction")
     * @Type("Gilbertsoft\SaferPayApi\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferPayApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\Payer
     * @SerializedName("Payer")
     * @Type("Gilbertsoft\SaferPayApi\Container\Payer")
     */
    protected $payer;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Gilbertsoft\SaferPayApi\Container\RegistrationResult")
     */
    protected $registrationResult;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\ThreeDs
     * @SerializedName("ThreeDs")
     * @Type("Gilbertsoft\SaferPayApi\Container\ThreeDs")
     */
    protected $threeDs;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\Dcc
     * @SerializedName("Dcc")
     * @Type("Gilbertsoft\SaferPayApi\Container\Dcc")
     */
    protected $dcc;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\Transaction $transaction
     * @return AssertResponse
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferPayApi\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\PaymentMeans $paymentMeans
     * @return AssertResponse
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param mixed $payer
     * @return AssertResponse
     */
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferPayApi\Container\RegistrationResult
     */
    public function getRegistrationResult()
    {
        return $this->registrationResult;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\RegistrationResult $registrationResult
     * @return AssertResponse
     */
    public function setRegistrationResult(RegistrationResult $registrationResult)
    {
        $this->registrationResult = $registrationResult;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferPayApi\Container\ThreeDs
     */
    public function getThreeDs()
    {
        return $this->threeDs;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\ThreeDs $threeDs
     * @return AssertResponse
     */
    public function setThreeDs(ThreeDs $threeDs)
    {
        $this->threeDs = $threeDs;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferPayApi\Container\Dcc
     */
    public function getDcc()
    {
        return $this->dcc;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\Dcc $dcc
     * @return AssertResponse
     */
    public function setDcc(Dcc $dcc)
    {
        $this->dcc = $dcc;

        return $this;
    }
}
