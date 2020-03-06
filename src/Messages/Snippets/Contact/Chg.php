<?php

namespace Webdevvie\Epp\Messages\Snippets\Contact;

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
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class Chg extends AbstractCommandMessage
{
    /**
     * @var PostalInfo
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo")
     * @SerializedName("postalInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $postalInfo;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("voice")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $voice;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("fax")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $fax;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $email;

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
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param string $voice
     * @return Chg
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Chg
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return PostalInfo
     */
    public function getPostalInfo()
    {
        return $this->postalInfo;
    }

    /**
     * @param string $postalInfo
     * @return Chg
     */
    public function setPostalInfo($postalInfo)
    {
        $this->postalInfo = $postalInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return Chg
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
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
     * @return Chg
     */
    public function setAuthInfo(AuthInfo $authInfo)
    {
        $this->authInfo = $authInfo;
        return $this;
    }
}
