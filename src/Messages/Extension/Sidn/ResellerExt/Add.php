<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Domain;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Period;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class Add
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $id;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return Add
     */
    public function setId(?string $id): Add
    {
        $this->id = $id;
        return $this;
    }
}