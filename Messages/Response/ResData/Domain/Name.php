<?php

namespace Webdevvie\Epp\Messages\Response\ResData\Domain;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class Name
 * @ExclusionPolicy("all")
 */
class Name
{
    /**
     * @var boolean
     * @Type("boolean")
     * @XmlAttribute
     * @Expose
     */
    protected $avail;

    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @Expose
     */
    protected $name;

    /**
     * @return boolean
     */
    public function isAvail()
    {
        return $this->avail;
    }

    /**
     * @param boolean $avail
     * @return Name
     */
    public function setAvail($avail)
    {
        $this->avail = $avail;
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
     * @return Name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
