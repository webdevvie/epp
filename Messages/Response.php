<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Fragment\Result;
use Webdevvie\Epp\Messages\Response\ResData;

/**
 * Class Response
 * @ExclusionPolicy("all")
 */
class Response
{
    /**
     * @var Result
     * @Type("Webdevvie\Epp\Messages\Fragment\Result")
     * @SerializedName("result")
     *
     * @Expose
     */
    protected $result;

    /**
     * @var ResData
     * @Type("Webdevvie\Epp\Messages\Response\ResData")
     * @SerializedName("resData")
     *
     * @Expose
     */
    protected $resData;

//
//    /**
//     * @var ExtensionMessage
//     * @Type("Webdevvie\Epp\Messages\Command\ExtensionMessage")
//     * @SerializedName("extension")
//     * @Expose
//     */
//    protected $extension;
//
//    /**
//     * @var MsgQ
//     * @Type("Webdevvie\Epp\Messages\MsgQ")
//     * @SerializedName("msgQ")
//     * @Expose
//     */
//    protected $msgQ;
//
//    /**
//     * @var TrId
//     * @Type("Webdevvie\Epp\Messages\TrId")
//     * @SerializedName("trID")
//     *
//     * @Expose
//     */
//    protected $trID;
    /**
     * @return Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param Result $result
     * @return Response
     */
    public function setResult(Result $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return ResData
     */
    public function getResData()
    {
        return $this->resData;
    }

    /**
     * @param ResData $resData
     * @return Response
     */
    public function setResData(ResData $resData)
    {
        $this->resData = $resData;
        return $this;
    }
}
