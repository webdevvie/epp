<?php

namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;
use Webdevvie\Epp\Messages\Command\ExtensionMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\ExtDomainChkData;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCD;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCheckDataMessage;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Epp\Messages\ResDataMessage;
use Webdevvie\Epp\Messages\ResponseMessage;
use Webdevvie\Epp\Messages\ResultMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\DomainCD as ExtDomainCd;
use JMS\Serializer\Annotation\XmlAttribute;

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
