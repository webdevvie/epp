<?php
namespace Webdevvie\Epp\Messages\ResData\CreData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\DnsInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content;

/**
 * Class Dns
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DnsCreData extends AbstractCommandMessage
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Content[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param Content[] $content
     * @return DnsInfData
     */
    public function setRecords(array $content)
    {
        $this->records = $content;
        return $this;
    }
}
