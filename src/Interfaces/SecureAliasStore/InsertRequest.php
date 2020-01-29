<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore;

use Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias;
use Gilbertsoft\SaferpayJsonApi\Container\ReturnUrls;
use Gilbertsoft\SaferpayJsonApi\Message\Request;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/Insert';

    const RESPONSE_CLASS = 'Gilbertsoft\SaferpayJsonApi\Interfaces\SecureAliasStore\InsertResponse';

    /**
     * @var \Gilbertsoft\SaferpayJsonApi\Container\RegisterAlias
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
     * @var \Gilbertsoft\SaferpayJsonApi\Container\ReturnUrls
     * @SerializedName("ReturnUrls")
     */
    protected $returnUrls;

    /**
     * @var \Gilbertsoft\SaferpayJsonApi\Container\Styling
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
     * @var \Gilbertsoft\SaferpayJsonApi\Container\Check
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
     * @return \Gilbertsoft\SaferpayJsonApi\Container\ReturnUrls
     */
    public function getReturnUrls()
    {
        return $this->returnUrls;
    }

    /**
     * @param \Gilbertsoft\SaferpayJsonApi\Container\ReturnUrls $returnUrls
     * @return AliasInsertRequest
     */
    public function setReturnUrls(ReturnUrls $returnUrls)
    {
        $this->returnUrls = $returnUrls;

        return $this;
    }
}
