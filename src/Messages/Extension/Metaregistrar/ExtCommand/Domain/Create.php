<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class Create extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("autoRenew")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $autoRenew;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("autoRenewPeriod")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    private $autoRenewPeriod;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("privacy")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $privacy;

    /**
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param string $privacy
     * @return Create
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoRenewPeriod()
    {
        return $this->autoRenewPeriod;
    }

    /**
     * @param string $autoRenewPeriod
     * @return Create
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        $this->autoRenewPeriod = $autoRenewPeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutoRenew()
    {
        return $this->autoRenew;
    }

    /**
     * @param string $autoRenew
     * @return Create
     */
    public function setAutoRenew($autoRenew)
    {
        $this->autoRenew = $autoRenew;
        return $this;
    }
}
