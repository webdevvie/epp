<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Create;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Update;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-scheduled-delete-1.0", prefix="scheduledDelete")
 */
class ScheduledDeleteUpdate
{
    const OPERATION_CANCEL = 'cancel';
    const OPERATION_SET_DATE = 'setDate';
    const OPERATION_SET_DATE_TO_END_OF_SUBSCRIPTION_PERIOD = 'setDateToEndOfSubscriptionPeriod';

    /**
     * @var string
     * @Type("string")
     * @SerializedName("operation")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-scheduled-delete-1.0", cdata=false)
     * @Expose
     */
    protected $operation;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("date")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-scheduled-delete-1.0")
     * @Expose
     */
    protected $date;

    /**
     * @return string
     */
    public function getOperation(): string
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     * @return ScheduledDelete
     */
    public function setOperation(string $operation): ScheduledDeleteUpdate
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null $date
     * @return ScheduledDelete
     */
    public function setDate(?string $date): ScheduledDeleteUpdate
    {
        $this->date = $date;
        return $this;
    }
}
