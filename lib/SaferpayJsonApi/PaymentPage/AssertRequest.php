<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\PaymentPage;

use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class AssertRequest extends Request
{
    const API_PATH = '/Payment/v1/PaymentPage/Assert';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\PaymentPage\AssertResponse';

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AssertRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
