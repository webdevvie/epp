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
class ExtDomainInfData
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("autoRenew")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $autoRenew;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("autoRenewPeriod")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $autoRenewPeriod;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("privacy")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $privacy;

    /**
     * @return string
     */
    public function getAutoRenew()
    {
        return $this->autoRenew;
    }

    /**
     * @param string $autoRenew
     * @return ExtDomainInfData
     */
    public function setAutoRenew($autoRenew)
    {
        $this->autoRenew = $autoRenew;
        return $this;
    }

    /**
     * @return integer
     */
    public function getAutoRenewPeriod()
    {
        return $this->autoRenewPeriod;
    }

    /**
     * @param integer $autoRenewPeriod
     * @return ExtDomainInfData
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        $this->autoRenewPeriod = $autoRenewPeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param string $privacy
     * @return ExtDomainInfData
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
        return $this;
    }
}
