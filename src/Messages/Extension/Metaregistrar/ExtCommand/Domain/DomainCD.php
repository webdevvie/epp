<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class DomainCD
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $domainName;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("defaultPeriod")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $defaultPeriod;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("premium")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $premium = false;

    /**
     * @var float
     * @Type("float")
     * @SerializedName("premiumPrice")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $premiumPrice = null;

    /**
     * @var string
     * @Type("float")
     * @SerializedName("premiumRecurringPrice")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $premiumRecurringPrice = null;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("premiumCurrency")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $premiumPriceCurrency = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("premiumPriceMessage")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $premiumPriceMessage = null;

    /**
     * @return integer
     */
    public function getDefaultPeriod()
    {
        return $this->defaultPeriod;
    }

    /**
     * @param integer $defaultPeriod
     * @return DomainCD
     */
    public function setDefaultPeriod($defaultPeriod)
    {
        $this->defaultPeriod = $defaultPeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return DomainCD
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPremium()
    {
        return $this->premium;
    }

    /**
     * @param boolean $premium
     * @return DomainCD
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return string
     */
    public function getPremiumPrice()
    {
        return $this->premiumPrice;
    }

    /**
     * @param string $premiumPrice
     * @return DomainCD
     */
    public function setPremiumPrice($premiumPrice)
    {
        $this->premiumPrice = $premiumPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getPremiumPriceCurrency()
    {
        return $this->premiumPriceCurrency;
    }

    /**
     * @param string $premiumPriceCurrency
     * @return DomainCD
     */
    public function setPremiumPriceCurrency($premiumPriceCurrency)
    {
        $this->premiumPriceCurrency = $premiumPriceCurrency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPremiumRecurringPrice()
    {
        return $this->premiumRecurringPrice;
    }

    /**
     * @param string $premiumRecurringPrice
     * @return DomainCD
     */
    public function setPremiumRecurringPrice($premiumRecurringPrice)
    {
        $this->premiumRecurringPrice = $premiumRecurringPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getPremiumPriceMessage()
    {
        return $this->premiumPriceMessage;
    }

    /**
     * @param string $premiumPriceMessage
     * @return DomainCD
     */
    public function setPremiumPriceMessage($premiumPriceMessage)
    {
        $this->premiumPriceMessage = $premiumPriceMessage;
        return $this;
    }
}
