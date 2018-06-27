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
class SvcExtension
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @XmlList(inline = true, entry = "extURI")
     * @Expose
     */
    protected $extURI=[];

    /**
     * @return string[]
     */
    public function getExtURI()
    {
        return $this->extURI;
    }

    /**
     * @param string[] $extURI
     * @return SvcExtension
     */
    public function setExtURI(array $extURI)
    {
        $this->extURI = $extURI;
        return $this;
    }
}
