<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Domain;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class ResellerDelete
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
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ResellerDelete
     */
    public function setId(string $id): ResellerDelete
    {
        $this->id = $id;
        return $this;
    }
}