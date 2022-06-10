<?php

namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class AuthInfo
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class AuthInfo
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("pw")
     * @XmlElement(cdata=true, namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $pw;

    /**
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param string $pw
     * @return AuthInfo
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
        return $this;
    }
}
