<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResDataMessage;
use Webdevvie\Epp\Messages\ResultMessage;
use Webdevvie\Epp\Messages\TrId;

/**
 * Class PollData
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Data
{
    /**
     * @var ResultMessage|null
     * @Type("Webdevvie\Epp\Messages\ResultMessage")
     * @SerializedName("result")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:epp-1.0")
     * @Expose
     */
    protected $result;

    /**
     * @var ResDataMessage|null
     * @Type("Webdevvie\Epp\Messages\ResDataMessage")
     * @SerializedName("resData")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:epp-1.0")
     * @Expose
     */
    protected $resData;

    /**
     * @var TrId|null
     * @Type("Webdevvie\Epp\Messages\TrId")
     * @SerializedName("trID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:epp-1.0")
     *
     * @Expose
     */
    protected $trID;

    /**
     * @return ResultMessage|null
     */
    public function getResult(): ?ResultMessage
    {
        return $this->result;
    }

    /**
     * @param ResultMessage|null $result
     * @return Data
     */
    public function setResult(?ResultMessage $result): Data
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return ResDataMessage|null
     */
    public function getResData(): ?ResDataMessage
    {
        return $this->resData;
    }

    /**
     * @param ResDataMessage|null $resData
     * @return Data
     */
    public function setResData(?ResDataMessage $resData): Data
    {
        $this->resData = $resData;
        return $this;
    }

    /**
     * @return TrId|null
     */
    public function getTrID(): ?TrId
    {
        return $this->trID;
    }

    /**
     * @param TrId|null $trID
     * @return Data
     */
    public function setTrID(?TrId $trID): Data
    {
        $this->trID = $trID;
        return $this;
    }
}
