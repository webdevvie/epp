<?php

namespace Webdevvie\Epp\Messages\Extension\SecDns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlSerializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Undelete;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\Annotation\XmlList;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class SecDnsInfData extends AbstractCommandMessage
{
    /**
     * @var SecDnsKeyData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\SecDns\SecDnsKeyData>")
     * @XmlList(inline=true, entry="keyData", namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $keyData;

    /**
     * @var SecDnsDsData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\SecDns\SecDnsDsData>")
     * @XmlList(inline=true, entry="dsData",namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $dsData;

    /**
     * @return array
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param SecDnsDsData[] $keyData
     * @return SecDnsInfData
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
     * @return SecDnsInfData
     */
    public function setDsData(array $dsData)
    {
        $this->dsData = $dsData;
        return $this;
    }
}
