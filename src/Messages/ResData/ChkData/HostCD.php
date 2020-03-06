<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\ResData\ChkData\HostCheckName;

use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCD
{
    /**
     * @var HostCheckName
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\HostCheckName")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostName = [];

    /**
     * @var HostCheckReason
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\HostCheckReason")
     * @SerializedName("reason")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $reason = [];

    /**
     * @return HostCheckName
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param HostCheckName $hostName
     * @return HostCD
     */
    public function setHostName(HostCheckName $hostName)
    {
        $this->hostName = $hostName;
        return $this;
    }

    /**
     * @return HostCheckReason
     */
    public function getReason(): HostCheckReason
    {
        return $this->reason;
    }

    /**
     * @param HostCheckReason $reason
     * @return HostCD
     */
    public function setReason(HostCheckReason $reason): HostCD
    {
        $this->reason = $reason;
        return $this;
    }
}
