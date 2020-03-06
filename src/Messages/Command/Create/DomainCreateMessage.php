<?php

namespace Webdevvie\Epp\Messages\Command\Create;

use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainContact;
use Webdevvie\Epp\Messages\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCreateMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(cdata=false,namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var Period
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Period")
     * @SerializedName("period")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $period;

    /**
     * @var Ns
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Ns")
     * @SerializedName("ns")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $ns;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("registrant")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $registrant;

    /**
     * @var DomainContact[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\DomainContact>")
     * @XmlList(inline=true, entry="contact", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $contacts = [];

    /**
     * @var AuthInfo
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo")
     * @SerializedName("authInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $authInfo;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.domain::create';

    /**
     * @var string
     */
    protected $ralMessageHandler = 'ral.fe.domain.create::create';

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
     * @return Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param Period $period
     * @return DomainCreateMessage
     */
    public function setPeriod(Period $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrant()
    {
        return $this->registrant;
    }

    /**
     * @param string $registrant
     * @return DomainCreateMessage
     */
    public function setRegistrant($registrant)
    {
        $this->registrant = $registrant;
        return $this;
    }

    /**
     * @return Ns
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * @param Ns $ns
     * @return DomainCreateMessage
     */
    public function setNs(Ns $ns)
    {
        $this->ns = $ns;
        return $this;
    }

    /**
     * @return AuthInfo
     */
    public function getAuthInfo()
    {
        return $this->authInfo;
    }

    /**
     * @param AuthInfo $authInfo
     * @return DomainCreateMessage
     */
    public function setAuthInfo(AuthInfo $authInfo)
    {
        $this->authInfo = $authInfo;
        return $this;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param array $contacts
     * @return DomainCreateMessage
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }
}
