<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns;

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
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DsData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("keyTag")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $keytag;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("alg")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $alg;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("digestType")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $digestType;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("digest")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $digest;

    /**
     * @var KeyData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\KeyData")
     * @SerializedName("keyData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
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
     * @return DsData
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
     * @return DsData
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
     * @return DsData
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
     * @return DsData
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;
        return $this;
    }

    /**
     * @return KeyData
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param KeyData $keyData
     * @return DsData
     */
    public function setKeyData(KeyData $keyData)
    {
        $this->keyData = $keyData;
        return $this;
    }
}
