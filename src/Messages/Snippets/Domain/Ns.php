<?php

namespace Webdevvie\Epp\Messages\Snippets\Domain;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Contact\Addr;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class Ns
 *
 * @package Webdevvie\Epp\Messages\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class Ns
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("hostObj")
     * @XmlList(inline=true, entry="hostObj", namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @XmlElement(cdata=false)
     * @Expose
     */
    protected $hostObj = [];

    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("hostObj")
     * @XmlList(inline=true, entry="hostAttr", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $hostAttr = [];

    /**
     * @return array
     */
    public function getHostObj()
    {
        return $this->hostObj;
    }

    /**
     * @param array $hostObj
     * @return Ns
     */
    public function setHostObj(array $hostObj)
    {
        $this->hostObj = $hostObj;
        return $this;
    }

    /**
     * @param string $name
     * @return void
     */
    public function addHostObj($name)
    {
        $this->hostObj[] = $name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function addHostAttr($name)
    {
        if (!in_array($name, $this->hostAttr)) {
            $this->hostAttr[] = $name;
        }
    }

    /**
     * @return HostAttr[]
     */
    public function getHostAttr()
    {
        $out = [];
        foreach ($this->hostAttr as $attr) {
            $out[] = new HostAttr($attr);
        }
        return $out;
    }
}
