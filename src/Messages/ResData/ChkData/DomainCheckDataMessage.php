<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

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
