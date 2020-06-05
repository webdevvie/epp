<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\ExtContactInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\ExtDomainChkData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\ExtDomainInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommandMessage;
use Webdevvie\Epp\Messages\Extension\Rgp\UpData;
use Webdevvie\Epp\Messages\Extension\Rgp\Update;
use Webdevvie\Epp\Messages\Extension\SecDns\SecDnsCreate;
use Webdevvie\Epp\Messages\Extension\SecDns\SecDnsInfData;
use Webdevvie\Epp\Messages\Extension\SecDns\SecDnsUpdate;
use Webdevvie\Epp\Messages\Extension\Sidn\Ext as SidnExtEpp;
use Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\InfData as SidnResellerExtInfData;
use Webdevvie\Epp\Messages\Extension\Sidn\Command as SidnCommand;
use Webdevvie\Epp\Messages\Extension\Sidn\ScheduledDeleteUpdate;
use Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Update as SidnResellerExtUpdate;
use Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Create as SidnResellerExtCreate;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class ExtensionMessage extends AbstractCommandMessage
{
    /**
     * @var SecDnsCreate
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsCreate")
     * @SerializedName("create")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $secDnsCreate;

    /**
     * @var SecDnsInfData
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsInfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $secDnsInfData;

    /**
     * @var SecDnsUpdate
     * @Type("Webdevvie\Epp\Messages\Extension\SecDns\SecDnsUpdate")
     * @SerializedName("update")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $secDnsUpdate;

    /**
     * @var Update
     * @Type("Webdevvie\Epp\Messages\Extension\Rgp\Update")
     * @SerializedName("update")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:rgp-1.0")
     * @Expose
     */
    protected $rgpUpdate;

    /**
     * @var UpData
     * @Type("Webdevvie\Epp\Messages\Extension\Rgp\UpData")
     * @SerializedName("upData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:rgp-1.0")
     * @Expose
     */
    protected $rgpUpData;

    /**
     * @var ExtCommandMessage
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommandMessage")
     * @SerializedName("command-ext")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-1.0")
     * @Expose
     */
    protected $metaregistrarCommandExt;

    /**
     * @var ExtDomainChkData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\ExtDomainChkData")
     * @SerializedName("extChckData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $metaregistrarDomainChkData;

    /**
     * @var ExtDomainInfData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\ExtDomainInfData")
     * @SerializedName("extDomainInfData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $metaregistrarDomainInfData;

    /**
     * @var ExtContactInfData
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\ExtContactInfData")
     * @SerializedName("extContactInfData")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $metaregistrarContactInfData;

    /**
     * @var SidnExtEpp|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Ext")
     * @SerializedName("ext")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $sidnExt;

    /**
     * @var SidnResellerExtUpdate|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Update")
     * @SerializedName("update")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $sidnResellerExtUpdate;
    /**
     * @var SidnResellerExtCreate|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Create")
     * @SerializedName("create-reference")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $sidnResellerExtCreate;
    /**
     * @var SidnCommand|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Command")
     * @SerializedName("command")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $sidnCommand;

    /**
     * @var ScheduledDeleteUpdate|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ScheduledDeleteUpdate")
     * @SerializedName("update")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-scheduled-delete-1.0")
     * @Expose
     */
    protected $sidnScheduledDeleteUpdate;

    /**
     * @var SidnResellerExtInfData|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\InfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $sidnResellerExtInfData;

    /**
     * @return SecDnsCreate
     */
    public function getSecDnsCreate()
    {
        return $this->secDnsCreate;
    }

    /**
     * @param SecDnsCreate $secDnsCreate
     * @return ExtensionMessage
     */
    public function setSecDnsCreate(SecDnsCreate $secDnsCreate)
    {
        $this->secDnsCreate = $secDnsCreate;
        return $this;
    }

    /**
     * @return SecDnsInfData
     */
    public function getSecDnsInfData()
    {
        return $this->secDnsInfData;
    }

    /**
     * @param SecDnsInfData $secDnsInfData
     * @return ExtensionMessage
     */
    public function setSecDnsInfData(SecDnsInfData $secDnsInfData)
    {
        $this->secDnsInfData = $secDnsInfData;
        return $this;
    }

    /**
     * @return SecDnsUpdate
     */
    public function getSecDnsUpdate()
    {
        return $this->secDnsUpdate;
    }

    /**
     * @param SecDnsUpdate $secDnsUpdate
     * @return ExtensionMessage
     */
    public function setSecDnsUpdate(SecDnsUpdate $secDnsUpdate)
    {
        $this->secDnsUpdate = $secDnsUpdate;
        return $this;
    }

    /**
     * @return Update
     */
    public function getRgpUpdate()
    {
        return $this->rgpUpdate;
    }

    /**
     * @param Update $rgpUpdate
     * @return ExtensionMessage
     */
    public function setRgpUpdate(Update $rgpUpdate)
    {
        $this->rgpUpdate = $rgpUpdate;
        return $this;
    }

    /**
     * @return UpData
     */
    public function getRgpUpData()
    {
        return $this->rgpUpData;
    }

    /**
     * @param UpData $rgpUpData
     * @return ExtensionMessage
     */
    public function setRgpUpData(UpData $rgpUpData)
    {
        $this->rgpUpData = $rgpUpData;
        return $this;
    }

    /**
     * @return ExtCommandMessage
     */
    public function getMetaregistrarCommandExt(): ExtCommandMessage
    {
        return $this->metaregistrarCommandExt;
    }

    /**
     * @param ExtCommandMessage $metaregistrarCommandExt
     * @return ExtensionMessage
     */
    public function setMetaregistrarCommandExt(ExtCommandMessage $metaregistrarCommandExt): ExtensionMessage
    {
        $this->metaregistrarCommandExt = $metaregistrarCommandExt;
        return $this;
    }

    /**
     * @return ExtDomainChkData
     */
    public function getMetaregistrarDomainChkData(): ExtDomainChkData
    {
        return $this->metaregistrarDomainChkData;
    }

    /**
     * @param ExtDomainChkData $metaregistrarDomainChkData
     * @return ExtensionMessage
     */
    public function setMetaregistrarDomainChkData(ExtDomainChkData $metaregistrarDomainChkData): ExtensionMessage
    {
        $this->metaregistrarDomainChkData = $metaregistrarDomainChkData;
        return $this;
    }

    /**
     * @return ExtDomainInfData
     */
    public function getMetaregistrarDomainInfData(): ExtDomainInfData
    {
        return $this->metaregistrarDomainInfData;
    }

    /**
     * @param ExtDomainInfData $metaregistrarDomainInfData
     * @return ExtensionMessage
     */
    public function setMetaregistrarDomainInfData(ExtDomainInfData $metaregistrarDomainInfData): ExtensionMessage
    {
        $this->metaregistrarDomainInfData = $metaregistrarDomainInfData;
        return $this;
    }

    /**
     * @return ExtContactInfData
     */
    public function getMetaregistrarContactInfData(): ExtContactInfData
    {
        return $this->metaregistrarContactInfData;
    }

    /**
     * @param ExtContactInfData $metaregistrarContactInfData
     * @return ExtensionMessage
     */
    public function setMetaregistrarContactInfData(ExtContactInfData $metaregistrarContactInfData): ExtensionMessage
    {
        $this->metaregistrarContactInfData = $metaregistrarContactInfData;
        return $this;
    }

    /**
     * @return SidnExtEpp|null
     */
    public function getSidnExt(): ?SidnExtEpp
    {
        return $this->sidnExt;
    }

    /**
     * @param SidnExtEpp|null $sidnExt
     * @return ExtensionMessage
     */
    public function setSidnExt(?SidnExtEpp $sidnExt): ExtensionMessage
    {
        $this->sidnExt = $sidnExt;
        return $this;
    }

    /**
     * @return SidnResellerExtInfData|null
     */
    public function getSidnResellerExtInfData(): ?SidnResellerExtInfData
    {
        return $this->sidnResellerExtInfData;
    }

    /**
     * @param SidnResellerExtInfData|null $sidnResellerExtInfData
     * @return ExtensionMessage
     */
    public function setSidnResellerExtInfData(?SidnResellerExtInfData $sidnResellerExtInfData): ExtensionMessage
    {
        $this->sidnResellerExtInfData = $sidnResellerExtInfData;
        return $this;
    }

    /**
     * @return SidnCommand|null
     */
    public function getSidnCommand(): ?SidnCommand
    {
        return $this->sidnCommand;
    }

    /**
     * @param SidnCommand|null $sidnCommand
     * @return ExtensionMessage
     */
    public function setSidnCommand(?SidnCommand $sidnCommand): ExtensionMessage
    {
        $this->sidnCommand = $sidnCommand;
        return $this;
    }

    /**
     * @return ScheduledDeleteUpdate|null
     */
    public function getSidnScheduledDeleteUpdate(): ?ScheduledDeleteUpdate
    {
        return $this->sidnScheduledDeleteUpdate;
    }

    /**
     * @param ScheduledDeleteUpdate|null $sidnScheduledDeleteUpdate
     * @return ExtensionMessage
     */
    public function setSidnScheduledDeleteUpdate(?ScheduledDeleteUpdate $sidnScheduledDeleteUpdate): ExtensionMessage
    {
        $this->sidnScheduledDeleteUpdate = $sidnScheduledDeleteUpdate;
        return $this;
    }

    /**
     * @return SidnResellerExtUpdate|null
     */
    public function getSidnResellerExtUpdate(): ?SidnResellerExtUpdate
    {
        return $this->sidnResellerExtUpdate;
    }

    /**
     * @param SidnResellerExtUpdate|null $sidnResellerExtUpdate
     * @return ExtensionMessage
     */
    public function setSidnResellerExtUpdate(?SidnResellerExtUpdate $sidnResellerExtUpdate): ExtensionMessage
    {
        $this->sidnResellerExtUpdate = $sidnResellerExtUpdate;
        return $this;
    }

    /**
     * @return SidnResellerExtCreate|null
     */
    public function getSidnResellerExtCreate(): ?SidnResellerExtCreate
    {
        return $this->sidnResellerExtCreate;
    }

    /**
     * @param SidnResellerExtCreate|null $sidnResellerExtCreate
     * @return ExtensionMessage
     */
    public function setSidnResellerExtCreate(?SidnResellerExtCreate $sidnResellerExtCreate): ExtensionMessage
    {
        $this->sidnResellerExtCreate = $sidnResellerExtCreate;
        return $this;
    }
}
