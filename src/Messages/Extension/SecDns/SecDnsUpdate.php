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
class SecDnsUpdate extends AbstractCommandMessage
{
    /**
     * @var Add
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\Add")
     * @SerializedName("add")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     *
     * @Expose
     */
    protected $add;

    /**
     * @var Rem
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\Rem")
     * @SerializedName("rem")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     *
     * @Expose
     */
    protected $rem;

    /**
     * @return Rem
     */
    public function getRem()
    {
        return $this->rem;
    }

    /**
     * @param Rem $rem
     * @return SecDnsUpdate
     */
    public function setRem(Rem $rem)
    {
        $this->rem = $rem;
        return $this;
    }

    /**
     * @return Add
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * @param Add $add
     * @return SecDnsUpdate
     */
    public function setAdd(Add $add)
    {
        $this->add = $add;
        return $this;
    }
}
