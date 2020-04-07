<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

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
    protected $hostCd=[];

    /**
     * @return HostCD[]
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
