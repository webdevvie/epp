<?php
namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\ExtensionMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class ResponseMessage
{
    /**
     * @var ResultMessage
     * @Type("Webdevvie\Epp\Messages\ResultMessage")
     * @SerializedName("result")
     *
     * @Expose
     */
    protected $result;

    /**
     * @var MsgQ
     * @Type("Webdevvie\Epp\Messages\MsgQ")
     * @SerializedName("msgQ")
     * @Expose
     */
    protected $msgQ;

    /**
     * @var ResDataMessage
     * @Type("Webdevvie\Epp\Messages\ResDataMessage")
     * @SerializedName("resData")
     *
     * @Expose
     */
    protected $resData;

    /**
     * @var ExtensionMessage
     * @Type("Webdevvie\Epp\Messages\Command\ExtensionMessage")
     * @SerializedName("extension")
     * @Expose
     */
    protected $extension;



    /**
     * @var TrId
     * @Type("Webdevvie\Epp\Messages\TrId")
     * @SerializedName("trID")
     *
     * @Expose
     */
    protected $trID;

    /**
     * @return MsgQ
     */
    public function getMsgQ()
    {
        return $this->msgQ;
    }

    /**
     * @param MsgQ|null $msgQ
     * @return EppMessage
     */
    public function setMsgQ($msgQ)
    {
        $this->msgQ = $msgQ;
        return $this;
    }

    /**
     * @return ResultMessage
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param ResultMessage $result
     * @return ResponseMessage
     */
    public function setResult(ResultMessage $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @param string $code
     * @param string $message
     * @return void
     */
    public function createResult($code, $message)
    {
        $this->result = new ResultMessage($code, $message);
    }

    /**
     * @return TrId
     */
    public function getTrID()
    {
        return $this->trID;
    }

    /**
     * @param string $trID
     * @param string $clTRID
     * @return EppMessage
     */
    public function setTrID($trID, $clTRID = '')
    {
        $this->trID = new TrId();
        $this->trID->setSvTRID($trID);
        if ($clTRID != '') {
            $this->trID->setClTRID($clTRID);
        }
        return $this;
    }

    /**
     * @return ResDataMessage
     */
    public function getResData()
    {
        return $this->resData;
    }

    /**
     * @param ResDataMessage $resData
     * @return ResponseMessage
     */
    public function setResData(ResDataMessage $resData)
    {
        $this->resData = $resData;
        return $this;
    }

    /**
     * Clears the resdata
     * @return void
     */
    public function clearResData()
    {
        $this->resData=null;
    }

    /**
     * @return ExtensionMessage
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param ExtensionMessage $extension
     * @return ResponseMessage
     */
    public function setExtension(ExtensionMessage $extension)
    {
        $this->extension = $extension;
        return $this;
    }
}
