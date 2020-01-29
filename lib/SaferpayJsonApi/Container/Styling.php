<?php

/*
 * This file is part of the gilbertsoft/saferpay-json-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Gilbertsoft\SaferpayJsonApi\Container;

use JMS\Serializer\Annotation\SerializedName;

class Styling
{
    /**
     * @var string
     * @SerializedName("CssUrl")
     */
    protected $cssUrl;

    /**
     * @var string
     * @SerializedName("Theme")
     */
    protected $theme;

    /**
     * @return string
     */
    public function getCssUrl()
    {
        return $this->cssUrl;
    }

    /**
     * @param string $cssUrl
     * @return Styling
     */
    public function setCssUrl($cssUrl)
    {
        $this->cssUrl = $cssUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     * @return Styling
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }
}
