<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class ResultMessage
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class ResultMessage
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $code;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("msg")
     *
     * @Expose
     */
    protected $msg;

    /**
     * ResultMessage constructor.
     *
     * @param string $code
     * @param string $msg
     */
    public function __construct($code = '', $msg = '')
    {
        $this->code = $code;
        $this->msg = $msg;
    }

    /**
     * @return integer
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param integer $code
     * @return ResultMessage
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param string $msg
     * @return ResultMessage
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }
}
