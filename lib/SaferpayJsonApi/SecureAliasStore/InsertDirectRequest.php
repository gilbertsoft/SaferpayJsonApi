<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\SecureAliasStore;

use Gilbertsoft\SaferPayApi\Container\PaymentMeans;
use Gilbertsoft\SaferPayApi\Container\RegisterAlias;
use Gilbertsoft\SaferPayApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertDirectRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/InsertDirect';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferPayApi\SecureAliasStore\InsertDirectResponse';

    /**
     * @var \Gilbertsoft\SaferPayApi\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferPayApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\RegisterAlias $registerAlias
     * @return InsertRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

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
     * @return InsertRequest
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }
}
