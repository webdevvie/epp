<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Contact
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("legalForm")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $legalForm;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("legalFormRegNo")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $legalFormRegNo;

    /**
     * @var boolean|null
     * @Type("boolean")
     * @SerializedName("limited")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $limited = null;

    /**
     * @return string|null
     */
    public function getLegalForm(): ?string
    {
        return $this->legalForm;
    }

    /**
     * @param string|null $legalForm
     * @return Contact
     */
    public function setLegalForm(?string $legalForm): Contact
    {
        $this->legalForm = $legalForm;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLegalFormRegNo(): ?string
    {
        return $this->legalFormRegNo;
    }

    /**
     * @param string|null $legalFormRegNo
     * @return Contact
     */
    public function setLegalFormRegNo(?string $legalFormRegNo): Contact
    {
        $this->legalFormRegNo = $legalFormRegNo;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getLimited(): ?bool
    {
        return $this->limited;
    }

    /**
     * @param bool|null $limited
     * @return Contact
     */
    public function setLimited(?bool $limited): Contact
    {
        $this->limited = $limited;
        return $this;
    }
}