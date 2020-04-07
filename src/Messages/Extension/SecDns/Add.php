<?php

namespace Webdevvie\Epp\Messages\Extension\SecDns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Add
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class Add
{
    /**
     * @var SecDnsKeyData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\SecDns\SecDnsKeyData>")
     * @XmlList(inline=true, entry="keyData", namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $keyData = [];

    /**
     * @var SecDnsDsData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\SecDns\SecDnsDsData>")
     * @XmlList(inline=true, entry="dsData",namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $dsData = [];

    /**
     * @param SecDnsKeyData $keyData
     * @return $this
     */
    public function addKeyData(SecDnsKeyData $keyData)
    {
        $this->keyData[]=$keyData;
        return $this;
    }
    /**
     * @return SecDnsKeyData[]
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param SecDnsKeyData[] $keyData
     * @return Add
     */
    public function setKeyData(array $keyData)
    {
        $this->keyData = $keyData;
        return $this;
    }

    /**
     * @return SecDnsDsData[]
     */
    public function getDsData()
    {
        return $this->dsData;
    }

    /**
     * @param SecDnsDsData[] $dsData
     * @return Add
     */
    public function setDsData(array $dsData)
    {
        $this->dsData = $dsData;
        return $this;
    }
}
