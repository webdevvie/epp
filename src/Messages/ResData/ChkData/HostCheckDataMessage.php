<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResData\ChkData\HostCD;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

/**
 * Class Command
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCheckDataMessage
{
    /**
     * @var HostCD[]
     * @Type("array<Webdevvie\Epp\Messages\ResData\ChkData\HostCD>")
     * @XmlList(inline=true, entry="cd", namespace="urn:ietf:params:xml:ns:host-1.0")
     * @Expose
     */
    protected $hostCd;

    /**
     * @return array
     */
    public function getHostCd()
    {
        return $this->hostCd;
    }

    /**
     * @param array $hostCd
     * @return HostCheckDataMessage
     */
    public function setHostCd(array $hostCd)
    {
        $this->hostCd = $hostCd;
        return $this;
    }
}
