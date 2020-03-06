<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Snippets\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Ns
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class Ns
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @XmlList(inline=true, entry="hostObj",namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     *
     * @Expose
     */
    protected $hostObj = [];

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
}
