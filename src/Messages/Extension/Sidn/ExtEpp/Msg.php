<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Msg
{
    /**
     * @var string|null
     * @Type("string")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $code='';

    /**
     * @var string|null
     * @Type("string")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $field;

    /**
     * @var string|null
     * @Type("string")
     * @XmlValue()
     *
     * @Expose
     */
    protected $msg;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return Msg
     */
    public function setCode(?string $code): Msg
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @param string|null $field
     * @return Msg
     */
    public function setField(?string $field): Msg
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMsg(): ?string
    {
        return $this->msg;
    }

    /**
     * @param string|null $msg
     * @return Msg
     */
    public function setMsg(?string $msg): Msg
    {
        $this->msg = $msg;
        return $this;
    }


}
