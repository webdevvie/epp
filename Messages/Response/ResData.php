<?php

namespace Webdevvie\Epp\Messages\Response;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Response\ResData\Domain\ChkData as DomainChkData;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class ResData
{
    /**
     * @var DomainChkData
     * @Type("Webdevvie\Epp\Messages\Response\ResData\Domain\ChkData")
     * @SerializedName("chkData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $domainChkData;

    /**
     * @return DomainChkData
     */
    public function getDomainChkData()
    {
        return $this->domainChkData;
    }

    /**
     * @param DomainChkData $domainChkData
     * @return ResData
     */
    public function setDomainChkData(DomainChkData $domainChkData)
    {
        $this->domainChkData = $domainChkData;
        return $this;
    }
}
