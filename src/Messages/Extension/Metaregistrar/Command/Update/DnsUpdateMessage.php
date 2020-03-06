<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Update;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Add;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Chg;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Rem;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class DnsUpdateMessage extends AbstractCommandMessage
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
     * @var Chg
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Chg")
     * @SerializedName("chg")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $chg;

    /**
     * @var Add
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Add")
     * @SerializedName("add")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $add;

    /**
     * @var Rem
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Rem")
     * @SerializedName("rem")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $rem;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainUpdateMessage
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Add
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * @param Add $add
     * @return DomainUpdateMessage
     */
    public function setAdd(Add $add)
    {
        $this->add = $add;
        return $this;
    }

    /**
     * @return Rem
     */
    public function getRem()
    {
        return $this->rem;
    }

    /**
     * @param Rem $rem
     * @return DomainUpdateMessage
     */
    public function setRem(Rem $rem)
    {
        $this->rem = $rem;
        return $this;
    }

    /**
     * @return Chg
     */
    public function getChg()
    {
        return $this->chg;
    }

    /**
     * @param Chg|null $chg
     * @return DnsUpdateMessage
     */
    public function setChg($chg)
    {
        $this->chg = $chg;
        return $this;
    }
}
