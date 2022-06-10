<?php

namespace Webdevvie\Epp\Messages\Snippets\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class PostalInfo
{
    const TYPE_LOC = 'loc';
    const TYPE_INT = 'int';

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("type")
     * @Expose
     */
    protected $type = 'loc';

    /**
     * @var string
     * @Type("string")
     * @SerializedName("roid")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $roid;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("org")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $org;

    /**
     * @var Addr
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\Addr")
     * @SerializedName("addr")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $addr;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return PostalInfo
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Addr
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * @param Addr $addr
     * @return PostalInfo
     */
    public function setAddr(Addr $addr)
    {
        $this->addr = $addr;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * @param string $org
     * @return PostalInfo
     */
    public function setOrg($org)
    {
        $this->org = $org;
        return $this;
    }
}
