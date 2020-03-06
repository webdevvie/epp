<?php
namespace Webdevvie\Epp\Messages\Extension\SecDns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Rem
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 */
class Rem extends Add
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("all")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:secDNS-1.1")
     * @Expose
     */
    protected $all;

    /**
     * @return string
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * @param string $all
     * @return Rem
     */
    public function setAll($all)
    {
        $this->all = $all;
        return $this;
    }
}
