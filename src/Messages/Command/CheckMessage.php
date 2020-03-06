<?php
namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\AbstractMessage;
use Webdevvie\Epp\Messages\Command\Check\ContactCheckMessage;
use Webdevvie\Epp\Messages\Command\Check\DomainCheckMessage;
use Webdevvie\Epp\Messages\Command\Check\HostCheckMessage;
use Webdevvie\Epp\Messages\MessageInterface;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class CheckMessage extends AbstractEppMessage
{
    /**
     * @var DomainCheckMessage
     * @Type("Webdevvie\Epp\Messages\Command\Check\DomainCheckMessage")
     * @SerializedName("check")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainCheck;

    /**
     * @var ContactCheckMessage
     * @Type("Webdevvie\Epp\Messages\Command\Check\ContactCheckMessage")
     * @SerializedName("check")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactCheck;

    /**
     * @var HostCheckMessage
     * @Type("Webdevvie\Epp\Messages\Command\Check\HostCheckMessage")
     * @SerializedName("check")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostCheck;

    /**
     * @return HostCheckMessage
     */
    public function getHostCheck()
    {
        return $this->hostCheck;
    }

    /**
     * @param HostCheckMessage $hostCheck
     * @return CheckMessage
     */
    public function setHostCheck(HostCheckMessage $hostCheck)
    {
        $this->hostCheck = $hostCheck;
        return $this;
    }

    /**
     * @return DomainCheckMessage
     */
    public function getDomainCheck()
    {
        return $this->domainCheck;
    }

    /**
     * @param DomainCheckMessage $domainCheck
     * @return CheckMessage
     */
    public function setDomainCheck(DomainCheckMessage $domainCheck)
    {
        $this->domainCheck = $domainCheck;
        return $this;
    }

    /**
     * @return ContactCheckMessage
     */
    public function getContactCheck()
    {
        return $this->contactCheck;
    }

    /**
     * @param ContactCheckMessage $contactCheck
     * @return CheckMessage
     */
    public function setContactCheck(ContactCheckMessage $contactCheck)
    {
        $this->contactCheck = $contactCheck;
        return $this;
    }
}
