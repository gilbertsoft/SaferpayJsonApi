<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferPayApi\Container;

use JMS\Serializer\Annotation\SerializedName;

class ReturnUrls
{
    /**
     * @var string
     * @SerializedName("Success")
     */
    protected $success;

    /**
     * @var string
     * @SerializedName("Fail")
     */
    protected $fail;

    /**
     * @var string
     * @SerializedName("Abort")
     */
    protected $abort;

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param string $success
     * @return ReturnUrls
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return string
     */
    public function getFail()
    {
        return $this->fail;
    }

    /**
     * @param string $fail
     * @return ReturnUrls
     */
    public function setFail($fail)
    {
        $this->fail = $fail;

        return $this;
    }

    /**
     * @return string
     */
    public function getAbort()
    {
        return $this->abort;
    }

    /**
     * @param string $abort
     * @return ReturnUrls
     */
    public function setAbort($abort)
    {
        $this->abort = $abort;

        return $this;
    }
}
