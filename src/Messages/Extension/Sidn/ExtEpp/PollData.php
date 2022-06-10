<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class PollData
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class PollData
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("command")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $command;

    /**
     * @var Data|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Data")
     * @SerializedName("data")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $data;

    /**
     * @return string|null
     */
    public function getCommand(): ?string
    {
        return $this->command;
    }

    /**
     * @param string|null $command
     * @return PollData
     */
    public function setCommand(?string $command): PollData
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return \Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Data|null
     */
    public function getData(): ?\Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Data
    {
        return $this->data;
    }

    /**
     * @param \Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Data|null $data
     * @return PollData
     */
    public function setData(?\Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Data $data): PollData
    {
        $this->data = $data;
        return $this;
    }
}
