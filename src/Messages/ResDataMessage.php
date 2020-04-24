<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\CreData\DnsCreData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\CreData\SSLCreData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\DnsInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\SSLInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\RenData\SSLRenData;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\InfData as SidnResellerInfData;
use Webdevvie\Epp\Messages\ResData\ChkData\ContactCheckDataMessage;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCheckDataMessage;
use Webdevvie\Epp\Messages\ResData\ChkData\HostCheckDataMessage;
use Webdevvie\Epp\Messages\ResData\CreData\ContactCreData;
use Webdevvie\Epp\Messages\ResData\CreData\DomainCreData;
use Webdevvie\Epp\Messages\ResData\CreData\HostCreData;
use Webdevvie\Epp\Messages\ResData\InfData\ContactInfData;
use Webdevvie\Epp\Messages\ResData\InfData\DomainInfData;
use Webdevvie\Epp\Messages\ResData\InfData\HostInfData;
use Webdevvie\Epp\Messages\ResData\RenData\DomainRenData;
use Webdevvie\Epp\Messages\ResData\TrnData\DomainTrnData;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class ResDataMessage
{
    /**
     * @var DomainCheckDataMessage
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\DomainCheckDataMessage")
     * @SerializedName("chkData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $chkData;

    /**
     * @var HostCheckDataMessage
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\HostCheckDataMessage")
     * @SerializedName("chkData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostChkData;

    /**
     * @var ContactCheckDataMessage
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\ContactCheckDataMessage")
     * @SerializedName("chkData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactChkData;

    /**
     * @var ContactCreData
     * @Type("Webdevvie\Epp\Messages\ResData\CreData\ContactCreData")
     * @SerializedName("creData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactCreData;

    /**
     * @var DomainCreData
     * @Type("Webdevvie\Epp\Messages\ResData\CreData\DomainCreData")
     * @SerializedName("creData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainCreData;

    /**
     * @var DnsCreData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\CreData\DnsCreData")
     * @SerializedName("creData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $dnsCreData;

    /**
     * @var SSLCreData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\CreData\SSLCreData")
     * @SerializedName("creData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $sslCreData;

    /**
     * @var HostCreData
     * @Type("Webdevvie\Epp\Messages\ResData\CreData\HostCreData")
     * @SerializedName("creData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostCreData;

    /**
     * @var DomainInfData
     * @Type("Webdevvie\Epp\Messages\ResData\InfData\DomainInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainInfData;

    /**
     * @var SSLRenData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\RenData\SSLRenData")
     * @SerializedName("renData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $sslRenData;

    /**
     * @var SSLInfData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\SSLInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $sslInfData;

    /**
     * @var DomainRenData
     * @Type("Webdevvie\Epp\Messages\ResData\RenData\DomainRenData")
     * @SerializedName("renData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainRenData;

    /**
     * @var ContactInfData
     * @Type("Webdevvie\Epp\Messages\ResData\InfData\ContactInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactInfData;

    /**
     * @var HostInfData
     * @Type("Webdevvie\Epp\Messages\ResData\InfData\HostInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $hostInfData;

    /**
     * @var DnsInfData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\DnsInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $dnsInfData;

    /**
     * @var SidnResellerInfData
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Reseller\InfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     *
     * @Expose
     */
    protected $sidnResellerInfData;

    /**
     * @var DomainTrnData
     * @Type("Webdevvie\Epp\Messages\ResData\TrnData\DomainTrnData")
     * @SerializedName("trnData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainTrnData;

    /**
     * @return DomainInfData
     */
    public function getDomainInfData()
    {
        return $this->domainInfData;
    }

    /**
     * @param DomainInfData $domainInfData
     * @return ResDataMessage
     */
    public function setDomainInfData(DomainInfData $domainInfData)
    {
        $this->domainInfData = $domainInfData;
        return $this;
    }

    /**
     * @return HostCreData
     */
    public function getHostCreData()
    {
        return $this->hostCreData;
    }

    /**
     * @param HostCreData $hostCreData
     * @return ResDataMessage
     */
    public function setHostCreData(HostCreData $hostCreData)
    {
        $this->hostCreData = $hostCreData;
        return $this;
    }

    /**
     * @return DomainCheckDataMessage
     */
    public function getChkData()
    {
        return $this->chkData;
    }

    /**
     * @param DomainCheckDataMessage $chkData
     * @return ResDataMessage
     */
    public function setChkData(DomainCheckDataMessage $chkData)
    {
        $this->chkData = $chkData;
        return $this;
    }

    /**
     * @return ContactInfData
     */
    public function getContactInfData()
    {
        return $this->contactInfData;
    }

    /**
     * @param ContactInfData $contactInfData
     * @return ResDataMessage
     */
    public function setContactInfData(ContactInfData $contactInfData)
    {
        $this->contactInfData = $contactInfData;
        return $this;
    }

    /**
     * @return ContactCheckDataMessage
     */
    public function getContactChkData()
    {
        return $this->contactChkData;
    }

    /**
     * @param ContactCheckDataMessage $contactChkData
     * @return ResDataMessage
     */
    public function setContactChkData(ContactCheckDataMessage $contactChkData)
    {
        $this->contactChkData = $contactChkData;
        return $this;
    }

    /**
     * @return DomainTrnData
     */
    public function getDomainTrnData()
    {
        return $this->domainTrnData;
    }

    /**
     * @param DomainTrnData $domainTrnData
     * @return ResDataMessage
     */
    public function setDomainTrnData(DomainTrnData $domainTrnData)
    {
        $this->domainTrnData = $domainTrnData;
        return $this;
    }

    /**
     * @return DomainCreData
     */
    public function getDomainCreData()
    {
        return $this->domainCreData;
    }

    /**
     * @param DomainCreData $domainCreData
     * @return ResDataMessage
     */
    public function setDomainCreData(DomainCreData $domainCreData)
    {
        $this->domainCreData = $domainCreData;
        return $this;
    }

    /**
     * @return HostCheckDataMessage
     */
    public function getHostChkData()
    {
        return $this->hostChkData;
    }

    /**
     * @param HostCheckDataMessage $hostChkData
     * @return ResDataMessage
     */
    public function setHostChkData(HostCheckDataMessage $hostChkData)
    {
        $this->hostChkData = $hostChkData;
        return $this;
    }

    /**
     * @return HostInfData
     */
    public function getHostInfData()
    {
        return $this->hostInfData;
    }

    /**
     * @param HostInfData $hostInfData
     * @return ResDataMessage
     */
    public function setHostInfData(HostInfData $hostInfData)
    {
        $this->hostInfData = $hostInfData;
        return $this;
    }

    /**
     * @return DomainRenData
     */
    public function getDomainRenData()
    {
        return $this->domainRenData;
    }

    /**
     * @param DomainRenData $domainRenData
     * @return ResDataMessage
     */
    public function setDomainRenData(DomainRenData $domainRenData)
    {
        $this->domainRenData = $domainRenData;
        return $this;
    }

    /**
     * @return DnsInfData
     */
    public function getDnsInfData()
    {
        return $this->dnsInfData;
    }

    /**
     * @param DnsInfData $dnsInfData
     * @return ResDataMessage
     */
    public function setDnsInfData(DnsInfData $dnsInfData)
    {
        $this->dnsInfData = $dnsInfData;
        return $this;
    }

    /**
     * @return DnsCreData
     */
    public function getDnsCreData()
    {
        return $this->dnsCreData;
    }

    /**
     * @param DnsCreData $dnsCreData
     * @return ResDataMessage
     */
    public function setDnsCreData(DnsCreData $dnsCreData)
    {
        $this->dnsCreData = $dnsCreData;
        return $this;
    }

    /**
     * @return SSLCreData
     */
    public function getSslCreData()
    {
        return $this->sslCreData;
    }

    /**
     * @param SSLCreData $sslCreData
     * @return ResDataMessage
     */
    public function setSslCreData(SSLCreData $sslCreData)
    {
        $this->sslCreData = $sslCreData;
        return $this;
    }

    /**
     * @return SSLInfData
     */
    public function getSslInfData()
    {
        return $this->sslInfData;
    }

    /**
     * @param SSLInfData $sslInfData
     * @return ResDataMessage
     */
    public function setSslInfData(SSLInfData $sslInfData)
    {
        $this->sslInfData = $sslInfData;
        return $this;
    }

    /**
     * @return SSLRenData
     */
    public function getSslRenData()
    {
        return $this->sslRenData;
    }

    /**
     * @param SSLRenData $sslRenData
     * @return ResDataMessage
     */
    public function setSslRenData(SSLRenData $sslRenData)
    {
        $this->sslRenData = $sslRenData;
        return $this;
    }

    /**
     * @return ContactCreData
     */
    public function getContactCreData(): ContactCreData
    {
        return $this->contactCreData;
    }

    /**
     * @param ContactCreData $contactCreData
     * @return ResDataMessage
     */
    public function setContactCreData(ContactCreData $contactCreData): ResDataMessage
    {
        $this->contactCreData = $contactCreData;
        return $this;
    }

    /**
     * @return SidnResellerInfData
     */
    public function getSidnResellerInfData(): SidnResellerInfData
    {
        return $this->sidnResellerInfData;
    }

    /**
     * @param SidnResellerInfData $sidnResellerInfData
     * @return ResDataMessage
     */
    public function setSidnResellerInfData(SidnResellerInfData $sidnResellerInfData): ResDataMessage
    {
        $this->sidnResellerInfData = $sidnResellerInfData;
        return $this;
    }
}
