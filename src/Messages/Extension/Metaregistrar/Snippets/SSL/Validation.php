<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 */
class Validation
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("type")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $type;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("status")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $status;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("statusMessage")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $statusMessage;

    /**
     * @var HostValidation[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\HostValidation>")
     * @SerializedName("host")
     * @XmlList(inline = true, entry = "host",namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     * @Expose
     */
    protected $host = [];

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Validation
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Validation
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return Validation
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * @return HostValidation[]
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param HostValidation[] $host
     * @return Validation
     */
    public function setHost(array $host)
    {
        $this->host = $host;
        return $this;
    }
}
