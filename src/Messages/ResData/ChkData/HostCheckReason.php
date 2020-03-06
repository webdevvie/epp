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
 * Class HostCheckReason
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCheckReason
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $reason;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("lang")
     * @Expose
     */
    protected $lang = 'en';

    /**
     * HostCheckReason constructor.
     * @param string $reason
     */
    public function __construct($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return HostCheckReason
     */
    public function setReason(string $reason): HostCheckReason
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return HostCheckReason
     */
    public function setLang(string $lang): HostCheckReason
    {
        $this->lang = $lang;
        return $this;
    }
}
