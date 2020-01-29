<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore;

use Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans;
use Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias;
use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertDirectRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/InsertDirect';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore\InsertDirectResponse';

    /**
     * @var \Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias $registerAlias
     * @return InsertRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

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
     * @return InsertRequest
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }
}
