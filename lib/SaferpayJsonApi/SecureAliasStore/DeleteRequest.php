<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\SecureAliasStore;

use Gilbertsoft\SaferPayApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;

class DeleteRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Delete';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferPayApi\SecureAliasStore\DeleteResponse';

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
