<?php

namespace Webdevvie\Epp\Messages\Snippets\Host;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Add
 *
 * @package Webdevvie\Epp\Messages\Snippets\Host
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class Add
{
    /**
     * @var Addr[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Host\Addr>")
     * @XmlList(inline=true, entry="addr", namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $addr = [];

    /**
     * @var Status[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Host\Status>")
     * @XmlList(inline=true, entry="status", namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $status = [];

    /**
     * @return array
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * @param array|null $addr
     * @return Add
     */
    public function setAddr($addr)
    {
        $this->addr = $addr;
        return $this;
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param array $status
     * @return Add
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }
}
