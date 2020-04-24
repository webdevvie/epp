<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Domain;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class ResellerCreate
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0",cdata=false)
     * @Expose
     */
    protected $id;


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
     * @var ResellerAddress|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress")
     * @SerializedName("address")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $address;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResellerCreate
     */
    public function setId(string $id): ResellerCreate
    {
        $this->id = $id;
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
     * @return ResellerCreate
     */
    public function setTradingName(?string $tradingName): ResellerCreate
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
     * @return ResellerCreate
     */
    public function setUrl(?string $url): ResellerCreate
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
     * @return ResellerCreate
     */
    public function setEmail(?string $email): ResellerCreate
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
     * @return ResellerCreate
     */
    public function setVoice(?string $voice): ResellerCreate
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return ResellerAddress|null
     */
    public function getAddress(): ?ResellerAddress
    {
        return $this->address;
    }

    /**
     * @param ResellerAddress|null $address
     * @return ResellerCreate
     */
    public function setAddress(?ResellerAddress $address): ResellerCreate
    {
        $this->address = $address;
        return $this;
    }
}