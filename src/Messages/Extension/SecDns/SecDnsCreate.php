<?php
namespace Webdevvie\Epp\Messages\Extension\SecDns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class SecDnsCreate extends AbstractCommandMessage
{
    /**
     * @var SecDnsKeyData
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsKeyData")
     * @SerializedName("keyData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $keyData;

    /**
     * @var SecDnsDsData
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsDsData")
     * @SerializedName("dsData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $dsData;

    /**
     * @return SecDnsKeyData
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param SecDnsKeyData $keyData
     * @return SecDnsCreate
     */
    public function setKeyData(SecDnsKeyData $keyData)
    {
        $this->keyData = $keyData;
        return $this;
    }

    /**
     * @return SecDnsDsData
     */
    public function getDsData()
    {
        return $this->dsData;
    }

    /**
     * @param SecDnsDsData $dsData
     * @return SecDnsCreate
     */
    public function setDsData(SecDnsDsData $dsData)
    {
        $this->dsData = $dsData;
        return $this;
    }
}
