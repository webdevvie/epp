<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Contact;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Domain;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class InfData
{
    /**
     * @var Contact|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Contact")
     * @SerializedName("contact")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $contact;

    /**
     * @var Domain|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData\Domain")
     * @SerializedName("domain")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $domain;


    /**
     * @return Domain|null
     */
    public function getDomain(): ?Domain
    {
        return $this->domain;
    }

    /**
     * @param Domain|null $domain
     * @return InfData
     */
    public function setDomain(?Domain $domain): InfData
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return InfData
     */
    public function setContact(?Contact $contact): InfData
    {
        $this->contact = $contact;
        return $this;
    }
}
