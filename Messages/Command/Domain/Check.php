<?php

namespace Webdevvie\Epp\Messages\Command\Domain;

use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Check
 *
 * @package Webdevvie\Epp\Messages\Command\Check\Domain
 * @ExclusionPolicy("all")
 */
class Check
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("name")
     * @XmlList(inline = true, entry = "name", namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $name = [];

    /**
     * @return string[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string[] $name
     * @return Check
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }
}
