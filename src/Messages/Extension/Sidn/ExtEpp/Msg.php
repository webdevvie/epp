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
     * @var integer
     * @Type("integer")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $code;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $field;

    /**
     * @var string
     * @Type("string")
     * @XmlValue()
     *
     * @Expose
     */
    protected $msg;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return Response
     */
    public function setCode(int $code): Response
    {
        $this->code = $code;
        return $this;
    }

}
