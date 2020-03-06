<?php
namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Command\Update\ContactUpdateMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Update\DnsUpdateMessage;
use Webdevvie\Epp\Messages\Command\Update\DomainUpdateMessage;
use Webdevvie\Epp\Messages\Command\Update\HostUpdateMessage;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class UpdateMessage extends AbstractEppMessage
{
    /**
     * @var ContactUpdateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Update\ContactUpdateMessage")
     * @SerializedName("update")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactUpdate;

    /**
     * @var DomainUpdateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Update\DomainUpdateMessage")
     * @SerializedName("update")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainUpdate;

    /**
     * @var HostUpdateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Update\HostUpdateMessage")
     * @SerializedName("update")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostUpdate;

    /**
     * @var DnsUpdateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Update\DnsUpdateMessage")
     * @SerializedName("update")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $metaregistrarDnsUpdate;

    /**
     * @return ContactUpdateMessage
     */
    public function getContactUpdate()
    {
        return $this->contactUpdate;
    }

    /**
     * @param ContactUpdateMessage $contactUpdate
     * @return UpdateMessage
     */
    public function setContactUpdate(ContactUpdateMessage $contactUpdate)
    {
        $this->contactUpdate = $contactUpdate;
        return $this;
    }

    /**
     * @return DomainUpdateMessage
     */
    public function getDomainUpdate()
    {
        return $this->domainUpdate;
    }

    /**
     * @param DomainUpdateMessage $domainUpdate
     * @return UpdateMessage
     */
    public function setDomainUpdate(DomainUpdateMessage $domainUpdate)
    {
        $this->domainUpdate = $domainUpdate;
        return $this;
    }

    /**
     * @return HostUpdateMessage
     */
    public function getHostUpdate()
    {
        return $this->hostUpdate;
    }

    /**
     * @param HostUpdateMessage $hostUpdate
     * @return UpdateMessage
     */
    public function setHostUpdate(HostUpdateMessage $hostUpdate)
    {
        $this->hostUpdate = $hostUpdate;
        return $this;
    }

    /**
     * @return DnsUpdateMessage
     */
    public function getMetaregistrarDnsUpdate(): DnsUpdateMessage
    {
        return $this->metaregistrarDnsUpdate;
    }

    /**
     * @param DnsUpdateMessage $metaregistrarDnsUpdate
     * @return UpdateMessage
     */
    public function setMetaregistrarDnsUpdate(DnsUpdateMessage $metaregistrarDnsUpdate): UpdateMessage
    {
        $this->metaregistrarDnsUpdate = $metaregistrarDnsUpdate;
        return $this;
    }


}
