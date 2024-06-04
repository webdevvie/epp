<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class ResellerUpdateChg
{

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
     * @return string|null
     */
    public function getTradingName(): ?string
    {
        return $this->tradingName;
    }

    /**
     * @param string|null $tradingName
     * @return ResellerUpdateChg
     */
    public function setTradingName(?string $tradingName): ResellerUpdateChg
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
     * @return ResellerUpdateChg
     */
    public function setUrl(?string $url): ResellerUpdateChg
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
     * @return ResellerUpdateChg
     */
    public function setEmail(?string $email): ResellerUpdateChg
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
     * @return ResellerUpdateChg
     */
    public function setVoice(?string $voice): ResellerUpdateChg
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
     * @return ResellerUpdateChg
     */
    public function setAddress(?ResellerAddress $address): ResellerUpdateChg
    {
        $this->address = $address;
        return $this;
    }
}
