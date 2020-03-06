<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class ExtDomainChkData extends AbstractCommandMessage
{
    /**
     * @var DomainCD[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\DomainCD>")
     * @XmlList(inline=true, entry="cd",namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $cd;

    /**
     * @return DomainCD[]
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * @param DomainCD[] $cd
     * @return ExtDomainChkData
     */
    public function setCd(array $cd)
    {
        $this->cd = $cd;
        return $this;
    }
}
