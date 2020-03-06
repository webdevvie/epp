<?php
namespace Webdevvie\Epp\Messages\Command\Delete;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Domain\PostalDelete;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainDeleteMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.domain::delete';
    /**
     * @var string
     */
    protected $ralMessageHandler = 'ral.fe.domain.delete::delete';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainDeleteMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
