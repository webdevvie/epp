<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class Info extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("option")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $option;

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param string $option
     * @return Info
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }
}
