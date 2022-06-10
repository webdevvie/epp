<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class DomainCancelDelete
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $name;

    /**
     * @var Period|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period")
     * @SerializedName("period")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $period;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainCancelDelete
     */
    public function setName(string $name): DomainCancelDelete
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Period|null
     */
    public function getPeriod(): ?Period
    {
        return $this->period;
    }

    /**
     * @param Period|null $period
     * @return DomainCancelDelete
     */
    public function setPeriod(?Period $period): DomainCancelDelete
    {
        $this->period = $period;
        return $this;
    }
}
