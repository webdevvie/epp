<?php
namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainInfoName extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @XmlElement(cdata=false)
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("hosts", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $hosts = '';

    /**
     * @return string
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param string $hosts
     * @return DomainInfoName
     */
    public function setHosts($hosts)
    {
        $this->hosts = $hosts;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainInfoName
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
