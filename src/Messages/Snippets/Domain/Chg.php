<?php
namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class Chg
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("registrant")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $registrant;

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
     * @return string
     */
    public function getRegistrant()
    {
        return $this->registrant;
    }

    /**
     * @param string $registrant
     * @return Chg
     */
    public function setRegistrant($registrant)
    {
        $this->registrant = $registrant;
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
