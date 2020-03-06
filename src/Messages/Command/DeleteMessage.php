<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\Command\Delete\ContactDeleteMessage;
use Webdevvie\Epp\Messages\Command\Delete\DnsDeleteMessage;
use Webdevvie\Epp\Messages\Command\Delete\DomainDeleteMessage;
use Webdevvie\Epp\Messages\Command\Delete\HostDeleteMessage;
use Webdevvie\Epp\Messages\Command\Delete\SSLDeleteMessage;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Delete
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DeleteMessage extends AbstractEppMessage
{
    /**
     * @var ContactDeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\Delete\ContactDeleteMessage")
     * @SerializedName("delete")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactDelete;

    /**
     * @var DomainDeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\Delete\DomainDeleteMessage")
     * @SerializedName("delete")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainDelete;

    /**
     * @var HostDeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\Delete\HostDeleteMessage")
     * @SerializedName("delete")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostDelete;

    /**
     * @var DnsDeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\Delete\DnsDeleteMessage")
     * @SerializedName("delete")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $metaregistrarDnsDelete;

    /**
     * @var SSLDeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\Delete\SSLDeleteMessage")
     * @SerializedName("delete")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $metaregistrarSslDelete;


    /**
     * @return ContactDeleteMessage
     */
    public function getContactDelete()
    {
        return $this->contactDelete;
    }

    /**
     * @param ContactDeleteMessage $contactDelete
     * @return DeleteMessage
     */
    public function setContactDelete(ContactDeleteMessage $contactDelete)
    {
        $this->contactDelete = $contactDelete;
        return $this;
    }

    /**
     * @return DomainDeleteMessage
     */
    public function getDomainDelete()
    {
        return $this->domainDelete;
    }

    /**
     * @param DomainDeleteMessage $domainDelete
     * @return DeleteMessage
     */
    public function setDomainDelete(DomainDeleteMessage $domainDelete)
    {
        $this->domainDelete = $domainDelete;
        return $this;
    }

    /**
     * @return HostDeleteMessage
     */
    public function getHostDelete()
    {
        return $this->hostDelete;
    }

    /**
     * @param HostDeleteMessage $hostDelete
     * @return DeleteMessage
     */
    public function setHostDelete(HostDeleteMessage $hostDelete)
    {
        $this->hostDelete = $hostDelete;
        return $this;
    }

    /**
     * @return DnsDeleteMessage
     */
    public function getMetaregistrarDnsDelete(): DnsDeleteMessage
    {
        return $this->metaregistrarDnsDelete;
    }

    /**
     * @param DnsDeleteMessage $metaregistrarDnsDelete
     * @return DeleteMessage
     */
    public function setMetaregistrarDnsDelete(DnsDeleteMessage $metaregistrarDnsDelete): DeleteMessage
    {
        $this->metaregistrarDnsDelete = $metaregistrarDnsDelete;
        return $this;
    }

    /**
     * @return SSLDeleteMessage
     */
    public function getMetaregistrarSslDelete(): SSLDeleteMessage
    {
        return $this->metaregistrarSslDelete;
    }

    /**
     * @param SSLDeleteMessage $metaregistrarSslDelete
     * @return DeleteMessage
     */
    public function setMetaregistrarSslDelete(SSLDeleteMessage $metaregistrarSslDelete): DeleteMessage
    {
        $this->metaregistrarSslDelete = $metaregistrarSslDelete;
        return $this;
    }
}
