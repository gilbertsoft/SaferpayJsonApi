<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore;

use Gilbertsoft\SaferpayJsonApi\Container\Alias;
use Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans;
use Gilbertsoft\SaferpayJsonApi\Message\Response;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertDirectResponse extends Response
{
    /**
     * @var \Gilbertsoft\SaferpayJsonApi\Container\Alias
     * @SerializedName("Alias")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Alias")
     */
    protected $alias;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans
     * @SerializedName("PaymentMeans")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\PaymentMeans")
     */
    protected $paymentMeans;

    /**
     * @return \Gilbertsoft\SaferpayJsonApi\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Alias $alias
     * @return AssertInsertResponse
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

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
     * @return AssertInsertResponse
     */
    public function setPaymentMeans(PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;

        return $this;
    }
}
