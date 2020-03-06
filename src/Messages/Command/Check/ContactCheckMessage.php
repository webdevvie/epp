<?php

namespace Webdevvie\Epp\Messages\Command\Check;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactCheckMessage extends AbstractCommandMessage
{
    /**
     * @var Id[]
     * @Type("array<Webdevvie\Epp\Messages\Command\Check\Id>")
     * @XmlList(inline=true, entry="id", namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $id = [];

    /**
     * @return string[]
     */
    public function getId(): array
    {
        $names = [];
        foreach ($this->id as $name) {
            $names[] = $name->getId();
        }
        return $names;
    }

    /**
     * @param string[] $names
     * @return HostCheckMessage
     */
    public function setId(array $names)
    {
        $nms = [];
        foreach ($names as $name) {
            $nms[] = new Id($name);
        }
        $this->id = $nms;
        return $this;
    }
}
