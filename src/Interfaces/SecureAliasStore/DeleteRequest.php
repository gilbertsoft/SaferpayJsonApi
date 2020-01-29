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

class DeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\SecureAliasStore\DeleteResponse';

    /**
     * @var string
     * @SerializedName("AliasId")
     */
    protected $aliasId;

    /**
     * @return string
     */
    public function getAliasId()
    {
        return $this->aliasId;
    }

    /**
     * @param string $aliasId
     * @return DeleteRequest
     */
    public function setAliasId($aliasId)
    {
        $this->aliasId = $aliasId;

        return $this;
    }
}