<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Period
{
    /**
     * @var string|null
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("unit")
     * @Expose
     */
    protected $unit = 'y';

    /**
     * @var integer|null
     * @Type("integer")
     * @XmlValue
     *
     * @Expose
     */
    protected $amount = 1;

    /**
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string|null $unit
     * @return Period
     */
    public function setUnit(?string $unit): Period
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return integer|null
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param integer|null $amount
     * @return Period
     */
    public function setAmount(?int $amount): Period
    {
        $this->amount = $amount;
        return $this;
    }
}
