<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\SecureAliasStore;

use Gilbertsoft\SaferPayApi\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertDirectResponse extends Response
{
    /**
     * @var \Gilbertsoft\SaferPayApi\Container\Alias
     * @SerializedName("Alias")
     * @Type("Gilbertsoft\SaferPayApi\Container\Alias")
     */
    protected $alias;

    /**
     * @var Gilbertsoft\SaferPayApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferPayApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return \Gilbertsoft\SaferPayApi\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\Alias $alias
     * @return AssertInsertResponse
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

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
     * @return AssertInsertResponse
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }
}
