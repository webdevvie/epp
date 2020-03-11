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
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostCreData
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:host-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HostCreData
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
     * @return HostCreData
     */
    public function setCrDate(?string $crDate): HostCreData
    {
        $this->crDate = $crDate;
        return $this;
    }

}
