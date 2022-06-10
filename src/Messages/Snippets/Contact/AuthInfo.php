<?php

namespace Webdevvie\Epp\Messages\Snippets\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class AuthInfo
 *
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class AuthInfo
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("pw")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
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
