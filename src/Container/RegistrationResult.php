<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class RegistrationResult
{
    /**
     * @var bool
     * @SerializedName("Success")
     * @Type("boolean")
     */
    protected $success;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Alias
     * @SerializedName("Alias")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Alias")
     */
    protected $alias;

    /**
     * @var Gilbertsoft\SaferpayJsonApi\Container\Error
     * @SerializedName("Error")
     * @Type("Gilbertsoft\SaferpayJsonApi\Container\Error")
     */
    protected $error;

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     * @return RegistrationResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Alias
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Alias $alias
     * @return RegistrationResult
     */
    public function setAlias(Alias $alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * @return Gilbertsoft\SaferpayJsonApi\Container\Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param Gilbertsoft\SaferpayJsonApi\Container\Error $error
     * @return RegistrationResult
     */
    public function setError(Error $error)
    {
        $this->error = $error;

        return $this;
    }
}
