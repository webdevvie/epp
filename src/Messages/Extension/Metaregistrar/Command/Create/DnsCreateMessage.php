<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Create;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Dns
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DnsCreateMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var Content[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content>")
     * @XmlList(inline=true, entry="content",  namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $records = [];

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.dns::create';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainCreateMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Content[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param Content[] $records
     * @return DnsCreateMessage
     */
    public function setRecords(array $records)
    {
        $this->records = $records;
        return $this;
    }
}
