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
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class KeyData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("flags")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $flags;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("protocol")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $protocol;

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
     * @SerializedName("pubKey")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $pubKey;

    /**
     * @return string
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * @param string $flags
     * @return KeyData
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param string $protocol
     * @return KeyData
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
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
     * @return KeyData
     */
    public function setAlg($alg)
    {
        $this->alg = $alg;
        return $this;
    }

    /**
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubKey;
    }

    /**
     * @param string $pubKey
     * @return KeyData
     */
    public function setPubKey($pubKey)
    {
        $this->pubKey = $pubKey;
        return $this;
    }
}
