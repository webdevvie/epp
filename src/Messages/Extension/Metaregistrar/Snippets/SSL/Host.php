<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class Host
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("validation")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $validation;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $email;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Host
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param string $validation
     * @return Host
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
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
     * @return Host
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}
