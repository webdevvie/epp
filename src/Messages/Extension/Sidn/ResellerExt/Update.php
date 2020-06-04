<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0", prefix="resellerExt")
 */
class Update
{
    /**
     * @var Rem|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Rem")
     * @SerializedName("rem")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $rem;

    /**
     * @var Add|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt\Rem")
     * @SerializedName("add")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-reseller-1.0")
     * @Expose
     */
    protected $add;

    /**
     * @return Rem|null
     */
    public function getRem(): ?Rem
    {
        return $this->rem;
    }

    /**
     * @param Rem|null $rem
     * @return Update
     */
    public function setRem(?Rem $rem): Update
    {
        $this->rem = $rem;
        return $this;
    }

    /**
     * @return Add|null
     */
    public function getAdd(): ?Add
    {
        return $this->add;
    }

    /**
     * @param Add|null $add
     * @return Update
     */
    public function setAdd(?Add $add): Update
    {
        $this->add = $add;
        return $this;
    }
}
    