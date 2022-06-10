<?php

namespace Webdevvie\Epp\Messages\Command\Check;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Host
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCheckMessage extends AbstractCommandMessage
{

    /**
     * @var HostName[]
     * @Type("array<Webdevvie\Epp\Messages\Command\Check\HostName>")
     * @XmlList(inline=true, entry="name", namespace="urn:ietf:params:xml:ns:host-1.0")
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
     * @return HostCheckMessage
     */
    public function setNames(array $names)
    {
        $nms = [];
        foreach ($names as $name) {
            $nms[] = new HostName($name);
        }
        $this->name = $nms;
        return $this;
    }
}
