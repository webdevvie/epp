<?php

namespace Webdevvie\Epp\Messages\Command\Info;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainInfoMessage extends AbstractCommandMessage
{
    /**
     * @var DomainInfoName
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.domain::info';

    /**
     * @var string
     */
    protected $ralMessageHandler = 'ral.fe.domain.info::info';

    /**
     * @return DomainInfoName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param DomainInfoName|string $name
     * @return DomainInfoMessage
     */
    public function setName($name)
    {
        if (is_string($name)) {
            $newName = new DomainInfoName();
            $newName->setName($name);
            $newName->setHosts('all');
            $name = $newName;
        }
        $this->name = $name;
        return $this;
    }
}
