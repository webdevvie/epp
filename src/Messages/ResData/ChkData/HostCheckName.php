<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;
use Webdevvie\Epp\Messages\ResData\ChkData\HostCD;
use Webdevvie\Epp\Messages\ResData\ChkData\HostCheckDataMessage;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Epp\Messages\ResDataMessage;
use Webdevvie\Epp\Messages\ResponseMessage;
use Webdevvie\Epp\Messages\ResultMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCheckName
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $name;

    /**
     * @var boolean
     * @Type("boolean")
     * @XmlAttribute()
     * @SerializedName("avail")
     * @Expose
     */
    protected $available = false;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HostcheckName
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return HostCheckName
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }
}
