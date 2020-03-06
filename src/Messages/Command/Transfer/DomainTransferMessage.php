<?php
namespace Webdevvie\Epp\Messages\Command\Transfer;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainTransferMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

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
     * @var Period
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Period")
     * @SerializedName("period")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $period;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainTransferMessage
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return DomainTransferMessage
     */
    public function setAuthInfo(AuthInfo $authInfo)
    {
        $this->authInfo = $authInfo;
        return $this;
    }
}
