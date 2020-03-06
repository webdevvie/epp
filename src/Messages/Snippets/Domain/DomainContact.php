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
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class DomainContact
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainContact
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @XmlElement(cdata=false,namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute
     *
     * @Expose
     */
    protected $type;

    /**
     * DomainContact constructor.
     *
     * @param string $id
     * @param string $type
     */
    public function __construct($id = null, $type = null)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return DomainContact
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return DomainContact
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
