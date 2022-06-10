<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class ResellerUpdate
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0",cdata=false)
     * @Expose
     */
    protected $id;


    /**
     * @var ResellerUpdateChg|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerUpdateChg")
     * @SerializedName("chg")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-reseller-1.0")
     * @Expose
     */
    protected $chg;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResellerUpdate
     */
    public function setId(string $id): ResellerUpdate
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ResellerUpdateChg|null
     */
    public function getChg(): ?ResellerUpdateChg
    {
        return $this->chg;
    }

    /**
     * @param ResellerUpdateChg|null $chg
     * @return ResellerUpdate
     */
    public function setChg(?ResellerUpdateChg $chg): ResellerUpdate
    {
        $this->chg = $chg;
        return $this;
    }
}
