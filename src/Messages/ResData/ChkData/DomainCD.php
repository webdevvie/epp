<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

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
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCD
{
    /**
     * @var DomainCheckName
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\DomainCheckName")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainName = [];

    /**
     * @var DomainCheckReason
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\DomainCheckReason")
     * @SerializedName("reason")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $reason = null;

    /**
     * @return DomainCheckReason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param DomainCheckReason $reason
     * @return DomainCD
     */
    public function setReason(DomainCheckReason $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return DomainCheckName
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @param DomainCheckName $domainName
     * @return DomainCD
     */
    public function setDomainName(DomainCheckName $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }
}
