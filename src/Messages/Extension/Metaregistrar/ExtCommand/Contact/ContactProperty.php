<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class ContactProperty
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("registry")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $registry;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $name;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("value")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $value;

    /**
     * @return string
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @param string $registry
     * @return ContactProperty
     */
    public function setRegistry($registry)
    {
        $this->registry = $registry;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ContactProperty
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return ContactProperty
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
