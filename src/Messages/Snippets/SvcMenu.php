<?php

namespace Webdevvie\Epp\Messages\Snippets;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\Login\SvcExtension;

/**
 * Class SvcMenu
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class SvcMenu
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("version")
     *
     * @Expose
     */
    protected $version;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("lang")
     *
     * @Expose
     */
    protected $lang;
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("objURI")
     * @XmlList(inline=true, entry="objURI")
     *
     * @Expose
     */
    protected $objURI = [];
    /**
     * @var SvcExtension
     * @Type("Webdevvie\Epp\Messages\Command\Login\SvcExtension")
     * @SerializedName("svcExtension")
     *
     * @Expose
     */
    protected $svcExtension;

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
    public function getSvcExtension(): ?SvcExtension
    {
        return $this->svcExtension;
    }

    /**
     * @param SvcExtension|null $svcExtension
     * @return SvcMenu
     */
    public function setSvcExtension(?SvcExtension $svcExtension)
    {
        $this->svcExtension = $svcExtension;
        return $this;
    }
}
