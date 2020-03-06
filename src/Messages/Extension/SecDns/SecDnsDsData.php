<?php
namespace Webdevvie\Epp\Messages\Extension\SecDns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class SecDnsDsData
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("keyTag")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $keytag;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("alg")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $alg;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("digestType")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $digestType;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("digest")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $digest;

    /**
     * @var SecDnsKeyData
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsKeyData")
     * @SerializedName("keyData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $keyData;

    /**
     * @return string
     */
    public function getKeytag()
    {
        return $this->keytag;
    }

    /**
     * @param string $keytag
     * @return SecDnsDsData
     */
    public function setKeytag($keytag)
    {
        $this->keytag = $keytag;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlg()
    {
        return $this->alg;
    }

    /**
     * @param string $alg
     * @return SecDnsDsData
     */
    public function setAlg($alg)
    {
        $this->alg = $alg;
        return $this;
    }

    /**
     * @return string
     */
    public function getDigestType()
    {
        return $this->digestType;
    }

    /**
     * @param string $digestType
     * @return SecDnsDsData
     */
    public function setDigestType($digestType)
    {
        $this->digestType = $digestType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * @param string $digest
     * @return SecDnsDsData
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;
        return $this;
    }

    /**
     * @return SecDnsKeyData
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param SecDnsKeyData $keyData
     * @return SecDnsDsData
     */
    public function setKeyData(SecDnsKeyData $keyData)
    {
        $this->keyData = $keyData;
        return $this;
    }
}
