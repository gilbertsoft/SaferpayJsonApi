<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\Message;

use Gilbertsoft\SaferPayApi\Container\ResponseHeader;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

abstract class Response
{
    /**
     * @var Gilbertsoft\SaferPayApi\Container\ResponseHeader
     * @SerializedName("ResponseHeader")
     * @Type("Gilbertsoft\SaferPayApi\Container\ResponseHeader")
     */
    protected $responseHeader;

    /**
     * @return Gilbertsoft\SaferPayApi\Container\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * @param Gilbertsoft\SaferPayApi\Container\ResponseHeader $responseHeader
     * @return Response
     */
    public function setResponseHeader(ResponseHeader $responseHeader)
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }
}
