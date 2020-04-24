<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\DnsCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\DomainCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\SSLCreateMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerCreate as SidnResellerCreate;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class CreateMessage extends AbstractEppMessage
{
    /**
     * @var ContactCreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage")
     * @SerializedName("create")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactCreate;

    /**
     * @var HostCreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Create\HostCreateMessage")
     * @SerializedName("create")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostCreate;

    /**
     * @var DomainCreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Create\DomainCreateMessage")
     * @SerializedName("create")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainCreate;

    /**
     * @var DnsCreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Create\DnsCreateMessage")
     * @SerializedName("create")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $metaregistrarDnsCreate;

    /**
     * @var SSLCreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\Create\SSLCreateMessage")
     * @SerializedName("create")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $metaregistrarSslCreate;

    /**
     * @var SidnResellerCreate|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerCreate")
     * @SerializedName("create")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     *
     * @Expose
     */
    protected $sidnResellerCreate;

    /**
     * @return ContactCreateMessage
     */
    public function getContactCreate()
    {
        return $this->contactCreate;
    }

    /**
     * @param ContactCreateMessage $contactCreate
     * @return CreateMessage
     */
    public function setContactCreate(ContactCreateMessage $contactCreate)
    {
        $this->contactCreate = $contactCreate;
        return $this;
    }

    /**
     * @return HostCreateMessage
     */
    public function getHostCreate()
    {
        return $this->hostCreate;
    }

    /**
     * @param HostCreateMessage $hostCreate
     * @return CreateMessage
     */
    public function setHostCreate(HostCreateMessage $hostCreate)
    {
        $this->hostCreate = $hostCreate;
        return $this;
    }

    /**
     * @return DomainCreateMessage
     */
    public function getDomainCreate()
    {
        return $this->domainCreate;
    }

    /**
     * @param DomainCreateMessage $domainCreate
     * @return CreateMessage
     */
    public function setDomainCreate(DomainCreateMessage $domainCreate)
    {
        $this->domainCreate = $domainCreate;
        return $this;
    }

    /**
     * @return DnsCreateMessage
     */
    public function getMetaregistrarDnsCreate(): DnsCreateMessage
    {
        return $this->metaregistrarDnsCreate;
    }

    /**
     * @param DnsCreateMessage $metaregistrarDnsCreate
     * @return CreateMessage
     */
    public function setMetaregistrarDnsCreate(DnsCreateMessage $metaregistrarDnsCreate): CreateMessage
    {
        $this->metaregistrarDnsCreate = $metaregistrarDnsCreate;
        return $this;
    }

    /**
     * @return SSLCreateMessage
     */
    public function getMetaregistrarSslCreate(): SSLCreateMessage
    {
        return $this->metaregistrarSslCreate;
    }

    /**
     * @param SSLCreateMessage $metaregistrarSslCreate
     * @return CreateMessage
     */
    public function setMetaregistrarSslCreate(SSLCreateMessage $metaregistrarSslCreate): CreateMessage
    {
        $this->metaregistrarSslCreate = $metaregistrarSslCreate;
        return $this;
    }

    /**
     * @return SidnResellerCreate|null
     */
    public function getSidnResellerCreate(): ?SidnResellerCreate
    {
        return $this->sidnResellerCreate;
    }

    /**
     * @param SidnResellerCreate|null $sidnResellerCreate
     * @return CreateMessage
     */
    public function setSidnResellerCreate(?SidnResellerCreate $sidnResellerCreate): CreateMessage
    {
        $this->sidnResellerCreate = $sidnResellerCreate;
        return $this;
    }
}
