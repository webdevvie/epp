<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Reseller;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class InfData
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $id;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("roid")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $roid;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("tradingName")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $tradingName;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("url")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $url;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("email")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $email;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("voice")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $voice;

    /**
     * @var ResellerAddress
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress")
     * @SerializedName("address")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $address;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("clID")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $clId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crID")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $crId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $crDate;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("upId")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $upId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("upDate")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $upDate;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return InfData
     */
    public function setId(?string $id): InfData
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoid(): ?string
    {
        return $this->roid;
    }

    /**
     * @param string|null $roid
     * @return InfData
     */
    public function setRoid(?string $roid): InfData
    {
        $this->roid = $roid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }

    /**
     * @param string|null $tradingName
     * @return InfData
     */
    public function setTradingName(?string $tradingName): InfData
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     * @return InfData
     */
    public function setUrl(?string $url): InfData
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return InfData
     */
    public function setEmail(?string $email): InfData
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVoice(): ?string
    {
        return $this->voice;
    }

    /**
     * @param string|null $voice
     * @return InfData
     */
    public function setVoice(?string $voice): InfData
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return ResellerAddress
     */
    public function getAddress(): ResellerAddress
    {
        return $this->address;
    }

    /**
     * @param ResellerAddress $address
     * @return InfData
     */
    public function setAddress(ResellerAddress $address): InfData
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClId(): ?string
    {
        return $this->clId;
    }

    /**
     * @param string|null $clId
     * @return InfData
     */
    public function setClId(?string $clId): InfData
    {
        $this->clId = $clId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrId(): ?string
    {
        return $this->crId;
    }

    /**
     * @param string|null $crId
     * @return InfData
     */
    public function setCrId(?string $crId): InfData
    {
        $this->crId = $crId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrDate(): ?string
    {
        return $this->crDate;
    }

    /**
     * @param string|null $crDate
     * @return InfData
     */
    public function setCrDate(?string $crDate): InfData
    {
        $this->crDate = $crDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpId(): ?string
    {
        return $this->upId;
    }

    /**
     * @param string|null $upId
     * @return InfData
     */
    public function setUpId(?string $upId): InfData
    {
        $this->upId = $upId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpDate(): ?string
    {
        return $this->upDate;
    }

    /**
     * @param string|null $upDate
     * @return InfData
     */
    public function setUpDate(?string $upDate): InfData
    {
        $this->upDate = $upDate;
        return $this;
    }
}
