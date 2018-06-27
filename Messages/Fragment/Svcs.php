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
class Svcs
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @XmlList(inline = true, entry = "objURI")
     * @Expose
     */
    protected $objURI = [];

    /**
     * @var SvcExtension
     * @Type("Webdevvie\Epp\Messages\Fragment\SvcExtension")
     * @SerializedName("svcExtension")
     * @Expose
     */
    protected $svcExtension;

    /**
     * @return string[]
     */
    public function getObjURI()
    {
        return $this->objURI;
    }

    /**
     * @param string[] $objURI
     * @return Svcs
     */
    public function setObjURI(array $objURI)
    {
        $this->objURI = $objURI;
        return $this;
    }

    /**
     * @return \Webdevvie\Epp\Messages\Fragment\SvcExtension
     */
    public function getSvcExtension()
    {
        return $this->svcExtension;
    }

    /**
     * @param \Webdevvie\Epp\Messages\Fragment\SvcExtension $svcExtension
     * @return Svcs
     */
    public function setSvcExtension(SvcExtension $svcExtension)
    {
        $this->svcExtension = $svcExtension;
        return $this;
    }
}
