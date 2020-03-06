<?php
namespace Webdevvie\Epp\Messages\Snippets\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Status
 *
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class Status
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     *
     * @Expose
     */
    protected $status;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     *
     * @Expose
     */
    protected $s;

    /**
     * Status constructor.
     *
     * @param string $s
     * @param string $status
     */
    public function __construct($s, $status)
    {
        $this->status = $status;
        $this->s = $s;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param string $s
     * @return Status
     */
    public function setS($s)
    {
        $this->s = $s;
        return $this;
    }
}
