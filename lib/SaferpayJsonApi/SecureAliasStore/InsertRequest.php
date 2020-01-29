<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\SecureAliasStore;

use Gilbertsoft\SaferPayApi\Container\RegisterAlias;
use Gilbertsoft\SaferPayApi\Container\ReturnUrls;
use Gilbertsoft\SaferPayApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Insert';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferPayApi\SecureAliasStore\InsertResponse';

    /**
     * @var \Gilbertsoft\SaferPayApi\Container\RegisterAlias
     * @SerializedName("RegisterAlias")
     */
    protected $registerAlias;

    /**
     * @var string
     * @SerializedName("Type")
     * @Type("string")
     */
    protected $type;

    /**
     * @var \Gilbertsoft\SaferPayApi\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var \Gilbertsoft\SaferPayApi\Container\Styling
     * @SerializedName("Styling")
     */
    protected $styling;

    /**
     * @var string
     * @SerializedName("LanguageCode")
     * @Type("string")
     */
    protected $languageCode;

    /**
     * @var \Gilbertsoft\SaferPayApi\Container\Check
     * @SerializedName("Check")
     */
    protected $check;

    /**
     * @return string
     */
    public function getRegisterAlias()
    {
        return $this->registerAlias;
    }

    /**
     * @param string $registerAlias
     * @return AliasInsertRequest
     */
    public function setRegisterAlias(RegisterAlias $registerAlias)
    {
        $this->registerAlias = $registerAlias;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return AliasInsertRequest
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return \Gilbertsoft\SaferPayApi\Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param \Gilbertsoft\SaferPayApi\Container\ReturnUrls $returnUrls
     * @return AliasInsertRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }
}
