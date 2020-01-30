<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\PaymentPage;

use Gilbertsoft\SaferpayJsonApi\Container\Dcc;
use Gilbertsoft\SaferpayJsonApi\Container\Payer;
use Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans;
use Gilbertsoft\SaferpayJsonApi\Container\RegistrationResult;
use Gilbertsoft\SaferpayJsonApi\Container\ThreeDs;
use Gilbertsoft\SaferpayJsonApi\Container\Transaction;
use Gilbertsoft\SaferpayJsonApi\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class AssertResponse extends Response
{
    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Transaction
     * @SerializedName("Transaction")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Transaction")
     */
    protected $transaction;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Payer
     * @SerializedName("Payer")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Payer")
     */
    protected $payer;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\RegistrationResult
     * @SerializedName("RegistrationResult")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\RegistrationResult")
     */
    protected $registrationResult;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\ThreeDs
     * @SerializedName("ThreeDs")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\ThreeDs")
     */
    protected $threeDs;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Dcc
     * @SerializedName("Dcc")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Dcc")
     */
    protected $dcc;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Transaction $transaction
     * @return AssertResponse
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans $paymentMeans
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
     * @return Gilbertsoft\SaferpayJsonApi\Container\RegistrationResult
     */
    public function getRegistrationResult()
    {
        return $this->registrationResult;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\RegistrationResult $registrationResult
     * @return AssertResponse
     */
    public function setRegistrationResult(RegistrationResult $registrationResult)
    {
        $this->registrationResult = $registrationResult;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\ThreeDs
     */
    public function getThreeDs()
    {
        return $this->threeDs;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\ThreeDs $threeDs
     * @return AssertResponse
     */
    public function setThreeDs(ThreeDs $threeDs)
    {
        $this->threeDs = $threeDs;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Dcc
     */
    public function getDcc()
    {
        return $this->dcc;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Dcc $dcc
     * @return AssertResponse
     */
    public function setDcc(Dcc $dcc)
    {
        $this->dcc = $dcc;

        return $this;
    }
}
