<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore;

use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class AssertInsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/AssertInsert';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore\AssertInsertResponse';

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
     * @return AssertInsertRequest
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
}
