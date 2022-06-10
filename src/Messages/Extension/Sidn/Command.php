<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\DomainCancelDelete;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Command
{
    /**
     * @var DomainCancelDelete|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Command\DomainCancelDelete")
     * @SerializedName("domainCancelDelete")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $domainCancelDelete;
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("clTRID")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $clTRID;

    /**
     * @return DomainCancelDelete|null
     */
    public function getDomainCancelDelete(): ?DomainCancelDelete
    {
        return $this->domainCancelDelete;
    }

    /**
     * @param DomainCancelDelete|null $domainCancelDelete
     * @return Command
     */
    public function setDomainCancelDelete(?DomainCancelDelete $domainCancelDelete): Command
    {
        $this->domainCancelDelete = $domainCancelDelete;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClTRID(): ?string
    {
        return $this->clTRID;
    }

    /**
     * @param string|null $clTRID
     * @return Command
     */
    public function setClTRID(?string $clTRID): Command
    {
        $this->clTRID = $clTRID;
        return $this;
    }
}
