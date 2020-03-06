<?php
namespace Webdevvie\Epp\Messages\Command\Transfer;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactTransferMessage extends AbstractCommandMessage
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
     * @var string
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\AuthInfo")
     * @SerializedName("authInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $authInfo;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactTransferMessage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthInfo()
    {
        return $this->authInfo;
    }

    /**
     * @param string $authInfo
     * @return ContactTransferMessage
     */
    public function setAuthInfo($authInfo)
    {
        $this->authInfo = $authInfo;
        return $this;
    }
}
