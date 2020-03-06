<?php

namespace Webdevvie\Epp\Messages\Snippets\Contact;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class Addr
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("street")
     * @XmlList(inline = true, entry = "street",namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $street = [];

    /**
     * @var string
     * @Type("string")
     * @SerializedName("city")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $city;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("sp")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $sp;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("pc")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $pc;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("cc")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $cc;

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param array $street
     * @return Addr
     */
    public function setStreet(array $street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return array
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Addr
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * @param string $pc
     * @return Addr
     */
    public function setPc($pc)
    {
        $this->pc = $pc;
        return $this;
    }

    /**
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param string $cc
     * @return Addr
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * @return string
     */
    public function getSp()
    {
        return $this->sp;
    }

    /**
     * @param string $sp
     * @return Addr
     */
    public function setSp($sp)
    {
        $this->sp = $sp;
        return $this;
    }
}
