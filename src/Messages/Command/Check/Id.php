<?php

namespace Webdevvie\Epp\Messages\Command\Check;

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
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class Id
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @XmlElement(cdata=false)
     *
     * @Expose
     */
    protected $id;

    /**
     * Id constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Id
     */
    public function setId(string $id): Id
    {
        $this->id = $id;
        return $this;
    }
}
