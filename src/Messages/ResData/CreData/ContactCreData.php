<?php
namespace Webdevvie\Epp\Messages\ResData\CreData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Command
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactCreData
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $id;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactCreData
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrDate(): ?string
    {
        return $this->crDate;
    }

    /**
     * @param string|null $crDate
     * @return ContactCreData
     */
    public function setCrDate(?string $crDate): ContactCreData
    {
        $this->crDate = $crDate;
        return $this;
    }


}
