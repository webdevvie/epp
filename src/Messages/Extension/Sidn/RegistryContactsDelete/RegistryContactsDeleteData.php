<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\RegistryContactsDelete;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-registry-contacts-delete-1.0", prefix="sidn")
 */
class RegistryContactsDeleteData
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("id")
     * @XmlList(inline = true, entry = "id",namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-registry-contacts-delete-1.0")
     * @Expose
     */
    protected $id = [];

    /**
     * @return string[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param string[] $id
     * @return RegistryContactsDeleteData
     */
    public function setId(array $id): RegistryContactsDeleteData
    {
        $this->id = $id;
        return $this;
    }
}