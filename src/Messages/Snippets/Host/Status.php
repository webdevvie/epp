<?php

namespace Webdevvie\Epp\Messages\Snippets\Host;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Status
 *
 * @package Webdevvie\Epp\Messages\Snippets\Host
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class Status
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $status;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("s")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $s;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("lang")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $lang;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param string $s
     * @return Status
     */
    public function setS($s)
    {
        $this->s = $s;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Status
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }
}
