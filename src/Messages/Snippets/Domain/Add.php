<?php
namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\XmlSerializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class Add
{
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
     * @var DomainContact[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\DomainContact>")
     * @XmlList(inline=true, entry="contact", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $contacts = [];
    /**
     * @var Status[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\Status>")
     * @XmlList(inline=true, entry="status", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $status = [];

    /**
     * @return Ns
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * @param Ns $ns
     * @return Add
     */
    public function setNs(Ns $ns)
    {
        $this->ns = $ns;
        return $this;
    }

    /**
     * @return DomainContact[]
     */
    public function getContact()
    {
        return $this->contacts;
    }

    /**
     * @param DomainContact[] $contact
     * @return Add
     */
    public function setContact(array $contact)
    {
        $this->contacts = $contact;
        return $this;
    }

    /**
     * @return Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status[] $status
     * @return Add
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }
}
