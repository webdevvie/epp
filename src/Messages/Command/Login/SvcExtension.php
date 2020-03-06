<?php

namespace Webdevvie\Epp\Messages\Command\Login;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Svcs
 *
 * @package Webdevvie\Epp\Messages\Command\Login
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class SvcExtension
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("extURI")
     * @XmlList(inline=true, entry="extURI")
     *
     * @Expose
     */
    protected $extURI = [];

    /**
     * @return array
     */
    public function getExtURI()
    {
        return $this->extURI;
    }

    /**
     * @param array $extURI
     * @return SvcExtension
     */
    public function setExtURI(array $extURI)
    {
        $this->extURI = $extURI;
        return $this;
    }
}
