<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;
use Webdevvie\Epp\Messages\ResData\ChkData\ContactCD;
use Webdevvie\Epp\Messages\ResData\ChkData\ContactCheckDataMessage;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Epp\Messages\ResDataMessage;
use Webdevvie\Epp\Messages\ResponseMessage;
use Webdevvie\Epp\Messages\ResultMessage;
use JMS\Serializer\Annotation\XmlAttribute;

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
