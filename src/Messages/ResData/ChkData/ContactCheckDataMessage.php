<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResData\ChkData\ContactCD;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

use JMS\Serializer\Annotation\XmlList;

/**
 * Class Command
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactCheckDataMessage
{
    /**
     * @var ContactCD[]
     * @Type("array<Webdevvie\Epp\Messages\ResData\ChkData\ContactCD>")
     * @SerializedName("cd")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @XmlList(inline=true, entry="cd", namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $contactCd;

    /**
     * @return array
     */
    public function getContactCd()
    {
        return $this->contactCd;
    }

    /**
     * @param array $contactCd
     * @return ContactCheckDataMessage
     */
    public function setContactCd(array $contactCd)
    {
        $this->contactCd = $contactCd;
        return $this;
    }

    /**
     * @param string  $id
     * @param boolean $available
     * @return void
     */
    public function setContactAvailability($id, $available)
    {
        $contactCd = new ContactCD();
        $contactCd->setContactId(new ContactCheckId($id, $available));
        $this->contactCd[] = $contactCd;
    }
}
