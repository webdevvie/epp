<?php
namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Handler\ArrayCollectionHandler;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-contact-1.0", prefix="command-ext-contact")
 */
class Update
{
    /**
     * @var ContactProperty[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\ContactProperty>")
     * @XmlList(inline=true, entry="property", namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $property=[];


    /**
     * @return ContactProperty
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param ContactProperty[] $property
     * @return Update
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }
}
