<?php
namespace Webdevvie\Epp\Messages\ResData\ChkData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResData\ChkData\ContactCheckName;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactCD
{
    /**
     * @var ContactCheckId
     * @Type("Webdevvie\Epp\Messages\ResData\ChkData\ContactCheckId")
     * @SerializedName("id")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactId;

    /**
     * @return ContactCheckId
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param ContactCheckId $contactId
     * @return ContactCD
     */
    public function setContactId(ContactCheckId $contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }
}
