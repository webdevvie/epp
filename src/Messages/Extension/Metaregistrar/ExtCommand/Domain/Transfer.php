<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Snippets\Domain\DomainContact;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class Transfer
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("registrant")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $registrant;

    /**
     * @var Ns
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Snippets\Domain\Ns")
     * @SerializedName("ns")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $ns;

    /**
     * @var DomainContact[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Snippets\Domain\DomainContact>")
     * @XmlList(inline=true, entry="contact",namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $contacts = [];

    /**
     * @return string
     */
    public function getRegistrant()
    {
        return $this->registrant;
    }

    /**
     * @param string $registrant
     * @return Transfer
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
     * @return Transfer
     */
    public function setNs(Ns $ns)
    {
        $this->ns = $ns;
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
     * @return Transfer
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }
}
