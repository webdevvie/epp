<?php

namespace Webdevvie\Epp\Messages\Snippets\Host;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlValue;

/**
 * Class Host
 *
 * @package Webdevvie\Epp\Messages\Snippets\Host
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class Addr
{
    /**
     * @var string
     * @Type("string")
     * @XmlValue
     * @Serializer\XmlElement(cdata=false)
     * @Expose
     */
    protected $ipAddress;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("ip")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $ip = 'v4';

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return Addr
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return Addr
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
