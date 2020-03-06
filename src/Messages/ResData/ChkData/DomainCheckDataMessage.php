<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCD;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

use JMS\Serializer\Annotation\XmlList;

/**
 * Class Command
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCheckDataMessage
{
    /**
     * @var DomainCD[]
     * @Type("array<Webdevvie\Epp\Messages\ResData\ChkData\DomainCD>")
     * @XmlList(inline=true, entry="cd",namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainCd;

    /**
     * @return DomainCD[]
     */
    public function getDomainCd()
    {
        return $this->domainCd;
    }

    /**
     * @param DomainCD[] $domainCd
     * @return DomainCheckDataMessage
     */
    public function setDomainCd(array $domainCd)
    {
        $this->domainCd = $domainCd;
        return $this;
    }
}
