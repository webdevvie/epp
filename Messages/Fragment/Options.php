<?php

namespace Webdevvie\Epp\Messages\Fragment;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

/**
 * @ExclusionPolicy("all")
 */
class Options
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("version")
     * @Expose
     */
    protected $version;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("lang")
     * @Expose
     */
    protected $lang;

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Options
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Options
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }
}
