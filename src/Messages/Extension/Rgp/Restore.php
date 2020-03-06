<?php

namespace Webdevvie\Epp\Messages\Extension\Rgp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\SecDns\Rem;
use JMS\Serializer\Annotation\XmlAttribute;

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
