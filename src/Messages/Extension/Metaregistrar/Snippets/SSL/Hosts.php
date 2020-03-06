<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class Hosts
{
    /**
     * @var Host[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Host>")
     * @SerializedName("host")
     * @XmlList(inline = true, entry = "host", namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     * @Expose
     */
    protected $host;

    /**
     * @return Host[]
     */
    public function getHosts()
    {
        return $this->host;
    }

    /**
     * @param Host[] $host
     * @return Hosts
     */
    public function setHosts(array $host)
    {
        $this->host = $host;
        return $this;
    }
}
