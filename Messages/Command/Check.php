<?php
namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Command\Domain\Check as DomainCheck;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 */
class Check
{
    /**
     * @var DomainCheck
     * @Type("Webdevvie\Epp\Messages\Command\Domain\Check")
     * @SerializedName("check")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainCheck;

    /**
     * @return DomainCheck
     */
    public function getDomainCheck()
    {
        return $this->domainCheck;
    }

    /**
     * @param DomainCheck $domainCheck
     * @return Check
     */
    public function setDomainCheck(DomainCheck $domainCheck)
    {
        $this->domainCheck = $domainCheck;
        return $this;
    }
//
//    /**
//     * @var ContactCheckMessage
//     * @Type("Webdevvie\Epp\Messages\Command\Check\ContactCheckMessage")
//     * @SerializedName("check")
//     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
//     *
//     * @Expose
//     */
//    protected $contactCheck;
//
//    /**
//     * @var HostCheckMessage
//     * @Type("Webdevvie\Epp\Messages\Command\Check\HostCheckMessage")
//     * @SerializedName("check")
//     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
//     *
//     * @Expose
//     */
//    protected $hostCheck;
}
