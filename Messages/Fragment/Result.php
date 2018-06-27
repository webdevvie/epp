<?php
namespace Webdevvie\Epp\Messages\Fragment;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class Result
 * @ExclusionPolicy("all")
 */
class Result
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     * @Expose
     */
    protected $code;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("msg")
     * @Expose
     */
    protected $msg;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Result
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
     * @return Result
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }
}
