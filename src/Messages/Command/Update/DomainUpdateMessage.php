<?php

namespace Webdevvie\Epp\Messages\Command\Update;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\Add;
use Webdevvie\Epp\Messages\Snippets\Domain\Chg;
use Webdevvie\Epp\Messages\Snippets\Domain\Rem;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainUpdateMessage extends AbstractCommandMessage
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
     * @var Add
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Add")
     * @SerializedName("add")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $add;

    /**
     * @var Rem
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Rem")
     * @SerializedName("rem")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $rem;

    /**
     * @var Chg
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Chg")
     * @SerializedName("chg")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $chg;


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
     * @return Chg
     */
    public function getChg()
    {
        return $this->chg;
    }

    /**
     * @param Chg $chg
     * @return DomainUpdateMessage
     */
    public function setChg(Chg $chg)
    {
        $this->chg = $chg;
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
}
