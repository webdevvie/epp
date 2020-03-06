<?php

namespace Webdevvie\Epp\Messages\Command\Check;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCheckMessage extends AbstractCommandMessage
{
    /**
     * @var Name[]
     * @Type("array<Webdevvie\Epp\Messages\Command\Check\Name>")
     * @XmlList(inline=true, entry="name", namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $name = [];


    /**
     * @return string
     */
    public function getNames()
    {
        $names = [];
        foreach ($this->name as $name) {
            $names[] = $name->getName();
        }
        return $names;
    }

    /**
     * @param string[] $names
     * @return DomainCheckMessage
     */
    public function setNames(array $names)
    {
        $nms = [];
        foreach ($names as $name) {
            $nms[] = new Name($name);
        }
        $this->name = $nms;
        return $this;
    }
}
