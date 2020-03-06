<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;

/**
 * Class PollMessage
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class PollMessage extends AbstractEppMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("op")
     * @XmlAttribute()
     * @Expose
     */
    private $op;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("msgID")
     * @XmlAttribute()
     * @Expose
     */
    private $msgId;

    /**
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * @param string $op
     * @return PollMessage
     */
    public function setOp($op)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * @return integer
     */
    public function getMsgId()
    {
        return $this->msgId;
    }

    /**
     * @param integer $msgId
     * @return PollMessage
     */
    public function setMsgId($msgId)
    {
        $this->msgId = $msgId;
        return $this;
    }
}
