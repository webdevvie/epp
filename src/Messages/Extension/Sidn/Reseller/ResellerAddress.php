<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Reseller;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class ResellerAddress
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("street")
     * @XmlList(inline = true, entry = "street",namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $street = [];

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("city")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $city;
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("pc")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $pc;
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("cc")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $cc;

    /**
     * @return string[]
     */
    public function getStreet(): array
    {
        return $this->street;
    }

    /**
     * @param string[] $street
     * @return ResellerAddress
     */
    public function setStreet(array $street): ResellerAddress
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return ResellerAddress
     */
    public function setCity(?string $city): ResellerAddress
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPc(): ?string
    {
        return $this->pc;
    }

    /**
     * @param string|null $pc
     * @return ResellerAddress
     */
    public function setPc(?string $pc): ResellerAddress
    {
        $this->pc = $pc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCc(): ?string
    {
        return $this->cc;
    }

    /**
     * @param string|null $cc
     * @return ResellerAddress
     */
    public function setCc(?string $cc): ResellerAddress
    {
        $this->cc = $cc;
        return $this;
    }
}
