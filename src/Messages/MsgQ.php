<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\MsgQ\Message;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class MsgQ extends AbstractCommandMessage
{
    /**
     * @var \DateTime
     * @Type("DateTime")
     * @SerializedName("qDate")
     *
     *
     * @Expose
     */
    protected $qDate;

    /**
     * @var Message
     * @Type("Webdevvie\Epp\Messages\MsgQ\Message")
     * @SerializedName("msg")
     *
     * @Expose
     */
    protected $msg;

    /**
     * @var integer
     * @Type("integer")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $count = 0;

    /**
     * @var integer
     * @Type("integer")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $id = 0;

    /**
     * @return \DateTime
     */
    public function getQDate()
    {
        return $this->qDate;
    }

    /**
     * @param \DateTime|null $qDate
     * @return MsgQ
     */
    public function setQDate($qDate)
    {
        $this->qDate = $qDate;
        return $this;
    }

    /**
     * @return Message
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     * @param string $lang
     * @return MsgQ
     */
    public function setMsg($msg, $lang = 'en')
    {
        $this->msg = new Message($msg, $lang);
        return $this;
    }

    /**
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param integer $count
     * @return MsgQ
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return MsgQ
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
