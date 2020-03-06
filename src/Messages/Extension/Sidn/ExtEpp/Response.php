<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Dns
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Response
{
    /**
     * @var Msg[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Msg>")
     * @SerializedName("msg")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @XmlList(inline=true, entry="msg", namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $msg;

    /**
     * @return string
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     * @return Response
     */
    public function setMsg(string $msg): Response
    {
        $this->msg = $msg;
        return $this;
    }
}
