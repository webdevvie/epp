<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactCheckId
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $id;

    /**
     * @var boolean
     * @Type("boolean")
     * @XmlAttribute()
     * @SerializedName("avail")
     * @Expose
     */
    protected $available = false;

    /**
     * ContactCheckId constructor.
     *
     * @param string  $id
     * @param boolean $available
     */
    public function __construct($id, $available = false)
    {
        $this->id = $id;
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactcheckId
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     * @return ContactCheckId
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }
}
