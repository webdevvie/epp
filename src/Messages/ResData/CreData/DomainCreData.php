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
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainCreData
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
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("exDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $exDate;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainCreData
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return DomainCreData
     */
    public function setCrDate(?string $crDate): DomainCreData
    {
        $this->crDate = $crDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExDate(): ?string
    {
        return $this->exDate;
    }

    /**
     * @param string|null $exDate
     * @return DomainCreData
     */
    public function setExDate(?string $exDate): DomainCreData
    {
        $this->exDate = $exDate;
        return $this;
    }
}
