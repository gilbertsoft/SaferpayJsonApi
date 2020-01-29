<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Message;

use Gilbertsoft\SaferpayJsonApi\Container\ResponseHeader;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

abstract class Response
{
    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\ResponseHeader
     * @SerializedName("ResponseHeader")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\ResponseHeader")
     */
    protected $responseHeader;

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->responseHeader;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\ResponseHeader $responseHeader
     * @return Response
     */
    public function setResponseHeader(ResponseHeader $responseHeader)
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }
}
