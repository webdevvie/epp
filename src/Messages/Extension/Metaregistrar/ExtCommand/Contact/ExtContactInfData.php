<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-contact-1.0", prefix="command-ext-contact")
 */
class ExtContactInfData
{
    /**
     * @var array
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\ContactProperty>")
     * @SerializedName("property")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @XmlList(inline = true, entry = "command-ext-contact:property")
     * @Expose
     */
    protected $property = [];

    /**
     * @return array
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param ContactProperty[] $property
     * @return ExtContactInfData
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }
}
