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
 * Class Reason
 * @ExclusionPolicy("all")
 */
class Reason
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     * @Expose
     */
    protected $lang;

    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @Expose
     */
    protected $reason;

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Reason
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return Reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
