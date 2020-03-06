<?php

namespace Webdevvie\Epp\Messages\ResData\InfData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\DsData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\KeyData;
use Webdevvie\Epp\Messages\ResData\ChkData\DnsCD;

/**
 * Class Dns
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DnsInfData extends AbstractCommandMessage
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
     * @var KeyData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\KeyData>")
     * @XmlList(inline=true, entry="keyData",  namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $keyData = [];

    /**
     * @var DsData[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\DsData>")
     * @XmlList(inline=true, entry="dsData",  namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $dsData = [];

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

    /**
     * @return DsData[]
     */
    public function getDsData()
    {
        return $this->dsData;
    }

    /**
     * @param DsData[] $dsData
     * @return DnsInfData
     */
    public function setDsData(array $dsData)
    {
        $this->dsData = $dsData;
        return $this;
    }

    /**
     * @return KeyData[]
     */
    public function getKeyData()
    {
        return $this->keyData;
    }

    /**
     * @param KeyData[] $keyData
     * @return DnsInfData
     */
    public function setKeyData(array $keyData)
    {
        $this->keyData = $keyData;
        return $this;
    }

    /**
     * @param DsData $dsData
     * @return DnsInfData
     */
    public function addDsData(DsData $dsData)
    {
        $this->dsData[] = $dsData;
        return $this;
    }

    /**
     * @param KeyData $keyData
     * @return DnsInfData
     */
    public function addKeyData(KeyData $keyData)
    {
        $this->keyData[] = $keyData;
        return $this;
    }
}
