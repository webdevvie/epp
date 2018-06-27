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
use Webdevvie\Epp\Messages\Fragment\SvcExtension;

/**
 * @ExclusionPolicy("all")
 */
class SvcMenu
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
     * @var string[]
     * @Type("array<string>")
     * @XmlList(inline = true, entry = "objURI")
     * @Expose
     */
    protected $objURI=[];
    /**
     * @var SvcExtension
     * @Type("Webdevvie\Epp\Messages\Fragment\SvcExtension")
     * @SerializedName("svcExtension")
     * @Expose
     */
    protected $svcExtension=[];

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return SvcMenu
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
     * @return SvcMenu
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getObjURI()
    {
        return $this->objURI;
    }

    /**
     * @param string[] $objURI
     * @return SvcMenu
     */
    public function setObjURI(array $objURI)
    {
        $this->objURI = $objURI;
        return $this;
    }

    /**
     * @return SvcExtension
     */
    public function getSvcExtension()
    {
        return $this->svcExtension;
    }

    /**
     * @param SvcExtension $svcExtension
     * @return SvcMenu
     */
    public function setSvcExtension(SvcExtension $svcExtension)
    {
        $this->svcExtension = $svcExtension;
        return $this;
    }
}
