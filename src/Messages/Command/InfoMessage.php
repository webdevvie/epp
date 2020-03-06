<?php
namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Info\DnsInfoMessage;
use Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage;
use Webdevvie\Epp\Messages\Command\Info\HostInfoMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Info\SSLInfoMessage;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class InfoMessage extends AbstractEppMessage
{
    /**
     * @var DomainInfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage")
     * @SerializedName("info")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainInfo;

    /**
     * @var ContactInfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage")
     * @SerializedName("info")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactInfo;

    /**
     * @var HostInfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\Info\HostInfoMessage")
     * @SerializedName("info")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostInfo;

    /**
     * @var DnsInfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\Info\DnsInfoMessage")
     * @SerializedName("info")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $dnsInfo;
    /**
     * @var SSLInfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\Info\SSLInfoMessage")
     * @SerializedName("info")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $sslInfo;

    /**
     * @return DomainInfoMessage
     */
    public function getDomainInfo()
    {
        return $this->domainInfo;
    }

    /**
     * @param DomainInfoMessage $domainInfo
     * @return CreateMessage
     */
    public function setDomainInfo(DomainInfoMessage $domainInfo)
    {
        $this->domainInfo = $domainInfo;
        return $this;
    }

    /**
     * @return ContactInfoMessage
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * @param ContactInfoMessage $contactInfo
     * @return InfoMessage
     */
    public function setContactInfo(ContactInfoMessage $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }

    /**
     * @return HostInfoMessage
     */
    public function getHostInfo()
    {
        return $this->hostInfo;
    }

    /**
     * @param HostInfoMessage $hostInfo
     * @return InfoMessage
     */
    public function setHostInfo(HostInfoMessage $hostInfo)
    {
        $this->hostInfo = $hostInfo;
        return $this;
    }

    /**
     * @return DnsInfoMessage
     */
    public function getDnsInfo()
    {
        return $this->dnsInfo;
    }

    /**
     * @param DnsInfoMessage $dnsInfo
     * @return InfoMessage
     */
    public function setDnsInfo(DnsInfoMessage $dnsInfo)
    {
        $this->dnsInfo = $dnsInfo;
        return $this;
    }

    /**
     * @return SSLInfoMessage
     */
    public function getSslInfo()
    {
        return $this->sslInfo;
    }

    /**
     * @param SSLInfoMessage $sslInfo
     * @return InfoMessage
     */
    public function setSslInfo(SSLInfoMessage $sslInfo)
    {
        $this->sslInfo = $sslInfo;
        return $this;
    }
}
