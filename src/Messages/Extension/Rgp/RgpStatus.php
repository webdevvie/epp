<?php

namespace Webdevvie\Epp\Messages\Extension\Rgp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:rgp-1.0", prefix="rgp")
 */
class RgpStatus extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("s")
     *
     * @Expose
     */
    protected $s;

    /**
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param string $s
     * @return RgpStatus
     */
    public function setS($s)
    {
        $this->s = $s;
        return $this;
    }
}
