<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\Command\Renew\DomainRenewMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Renew\SSLRenewMessage;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Renew
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class RenewMessage extends AbstractEppMessage
{
    /**
     * @var DomainRenewMessage
     * @Type("Webdevvie\Epp\Messages\Command\Renew\DomainRenewMessage")
     * @SerializedName("renew")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainRenew;

    /**
     * @var SSLRenewMessage
     * @Type("Webdevvie\Epp\Messages\Command\Renew\SSLRenewMessage")
     * @SerializedName("renew")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $sslRenew;

    /**
     * @return DomainRenewMessage
     */
    public function getDomainRenew()
    {
        return $this->domainRenew;
    }

    /**
     * @param DomainRenewMessage $domainRenew
     * @return RenewMessage
     */
    public function setDomainRenew(DomainRenewMessage $domainRenew)
    {
        $this->domainRenew = $domainRenew;
        return $this;
    }

    /**
     * @return SSLRenewMessage
     */
    public function getSslRenew()
    {
        return $this->sslRenew;
    }

    /**
     * @param SSLRenewMessage $sslRenew
     * @return RenewMessage
     */
    public function setSslRenew(SSLRenewMessage $sslRenew)
    {
        $this->sslRenew = $sslRenew;
        return $this;
    }
}
