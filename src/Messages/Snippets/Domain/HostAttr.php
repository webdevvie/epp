<?php
namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Contact\Addr;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * Class HostAttr
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class HostAttr extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("hostName")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $hostName;

    /**
     * HostAttr constructor.
     *
     * @param string $hostName
     */
    public function __construct($hostName)
    {
        $this->hostName = $hostName;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
        return $this->hostName;
    }

    /**
     * @param string $hostName
     * @return HostAttr
     */
    public function setHostName($hostName)
    {
        $this->hostName = $hostName;
        return $this;
    }
}
