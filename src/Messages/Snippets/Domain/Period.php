<?php

namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Period
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class Period
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("unit")
     * @Expose
     */
    protected $unit = 'y';

    /**
     * @var integer
     * @Type("integer")
     * @XmlValue
     *
     * @Expose
     */
    protected $amount = 1;


    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return Period
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return Period
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
