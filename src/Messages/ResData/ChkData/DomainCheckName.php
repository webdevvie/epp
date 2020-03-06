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
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCheckName
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $name;


    /**
     * @var boolean
     * @Type("boolean")
     * @XmlAttribute()
     * @SerializedName("avail")
     * @Expose
     */
    protected $available = false;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomaincheckName
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     * @return DomainCheckName
     */
    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @param DomainCD[]    $names
     * @param ExtDomainCd[] $extInfo
     * @param string        $hash
     * @param string        $clTrid
     * @return EppMessage
     */
    public static function generateEppMessageWithResults(array $names, array $extInfo, $hash, $clTrid)
    {
        $outMessage = new EppMessage();
        $responseMessage = new ResponseMessage();
        $responseMessage->setTrID($hash, $clTrid);
        $resultMessage = new ResultMessage();
        $resultMessage->setCode(1000);
        $resultMessage->setMsg("Command completed successfully");
        $chkData = new DomainCheckDataMessage();
        $chkData->setDomainCd($names);
        $resData = new ResDataMessage();
        $resData->setChkData($chkData);
        $responseMessage->setResData($resData);
        $responseMessage->setResult($resultMessage);
        $outMessage->setResponse($responseMessage);
        $ext = new ExtensionMessage();
        $extChkData = new ExtDomainChkData();
        $extChkData->setCd($extInfo);
        $ext->setExtDomainChkData($extChkData);
        $responseMessage->setExtension($ext);
        return $outMessage;
    }
}
