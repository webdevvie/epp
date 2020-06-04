<?php
namespace Webdevvie\Epp\Messages\MsgQ;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class Message
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute("lang")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:epp-1.0")
     *
     * @Expose
     */
    protected $lang;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("msg")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:epp-1.0")
     * @XmlValue
     * @Expose
     */
    protected $msg;

    /**
     * Message constructor.
     * @param string $msg
     * @param string $lang
     */
    public function __construct($msg, $lang = 'en')
    {
        $this->lang = $lang;
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Message
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
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
     * @return Message
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
        return $this;
    }
}
