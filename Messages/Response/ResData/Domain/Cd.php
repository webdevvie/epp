<?php

namespace Webdevvie\Epp\Messages\Response\ResData\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;

/**
 * Class Cd
 * @ExclusionPolicy("all")
 */
class Cd
{
    /**
     * @var Name
     * @Type("Webdevvie\Epp\Messages\Response\ResData\Domain\Name")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $name;
    /**
     * @var Reason
     * @Type("Webdevvie\Epp\Messages\Response\ResData\Domain\Reason")
     * @SerializedName("reason")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $reason;
    /**
     * @return Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Name $name
     * @return Cd
     */
    public function setName(Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Reason
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param Reason|null $reason
     * @return Cd
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
