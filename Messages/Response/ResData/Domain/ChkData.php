<?php

namespace Webdevvie\Epp\Messages\Response\ResData\Domain;

use Webdevvie\Epp\Messages\Response\ResData\Domain\Cd;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class ChkData
 * @ExclusionPolicy("all")
 */
class ChkData
{
    /**
     * @var Cd[]
     * @Type("array<Webdevvie\Epp\Messages\Response\ResData\Domain\Cd>")
     * @SerializedName("cd")
     * @XmlList(inline = true, entry = "cd",namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $cd;

    /**
     * @return Cd[]
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * @param cd[] $cd
     * @return ChkData
     */
    public function setCd(array $cd)
    {
        $this->cd = $cd;
        return $this;
    }
}
