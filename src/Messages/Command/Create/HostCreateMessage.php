<?php

namespace Webdevvie\Epp\Messages\Command\Create;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Host\Addr;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCreateMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var Addr[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Host\Addr>")
     * @SerializedName("addr")
     * @XmlList(inline=true, entry="addr", namespace="urn:ietf:params:xml:ns:host-1.0")
     * @Expose
     */
    protected $addr = [];


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Addr[]
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * @param Addr[] $addr
     * @return HostCreateMessage
     */
    public function setAddr(array $addr)
    {
        $this->addr = $addr;
        return $this;
    }
}
