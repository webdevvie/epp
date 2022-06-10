<?php

namespace Webdevvie\Epp\Messages\Command\Info;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Host\PostalInfo;

/**
 * Class Host
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostInfoMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(cdata=false,namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HostInfoMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
