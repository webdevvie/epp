<?php

namespace Webdevvie\Epp\Messages\Extension\Rgp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:rgp-1.0", prefix="rgp")
 */
class Restore
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("op")
     * @Expose
     */
    protected $op;

    /**
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * @param string $op
     * @return Restore
     */
    public function setOp($op)
    {
        $this->op = $op;
        return $this;
    }
}
