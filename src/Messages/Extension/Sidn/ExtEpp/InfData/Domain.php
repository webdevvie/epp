<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Domain
{
    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("optOut")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $optOut;

    /**
     * @var boolean|null
     * @Type("boolean")
     * @SerializedName("limited")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $limited = null;

    /**
     * @var Period|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period")
     * @SerializedName("period")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $period;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("scheduledDeleteDate")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $scheduledDeleteDate = null;

    /**
     * @return bool
     */
    public function isOptOut(): bool
    {
        return $this->optOut;
    }

    /**
     * @param bool $optOut
     * @return Domain
     */
    public function setOptOut(bool $optOut): Domain
    {
        $this->optOut = $optOut;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLimited(): ?bool
    {
        return $this->limited;
    }

    /**
     * @param bool|null $limited
     * @return Domain
     */
    public function setLimited(?bool $limited): Domain
    {
        $this->limited = $limited;
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
     * @return Domain
     */
    public function setPeriod(?Period $period): Domain
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScheduledDeleteDate(): ?string
    {
        return $this->scheduledDeleteDate;
    }

    /**
     * @param string|null $scheduledDeleteDate
     * @return Domain
     */
    public function setScheduledDeleteDate(?string $scheduledDeleteDate): Domain
    {
        $this->scheduledDeleteDate = $scheduledDeleteDate;
        return $this;
    }
}