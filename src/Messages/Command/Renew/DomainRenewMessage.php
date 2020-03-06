<?php

namespace Webdevvie\Epp\Messages\Command\Renew;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Renew
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainRenewMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("curExpDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $curExpDate;

    /**
     * @var Period
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Period")
     * @SerializedName("period")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $period = null;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.domain::renew';

    /**
     * @var string
     */
    protected $ralMessageHandler = 'ral.fe.domain.renew::renew';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainRenewMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurExpDate()
    {
        return $this->curExpDate;
    }

    /**
     * @param string $curExpDate
     * @return DomainRenewMessage
     */
    public function setCurExpDate($curExpDate)
    {
        $this->curExpDate = $curExpDate;
        return $this;
    }

    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param Period $period
     * @return DomainRenewMessage
     */
    public function setPeriod(Period $period)
    {
        $this->period = $period;
        return $this;
    }
}
