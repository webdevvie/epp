<?php
namespace Webdevvie\Epp\Messages\Extension\Metaregistrar;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Undelete;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-1.0", prefix="command-ext")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class ExtCommandMessage extends AbstractCommandMessage
{
    /**
     * @var Domain
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain")
     * @SerializedName("domain")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $domain;

    /**
     * @var Contact
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact")
     * @SerializedName("contact")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $contact;

    /**
     * @return Domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param Domain $domain
     * @return ExtCommandMessage
     */
    public function setDomain(Domain $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return ExtCommandMessage
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }
}
