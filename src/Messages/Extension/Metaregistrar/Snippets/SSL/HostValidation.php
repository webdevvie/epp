<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 */
class HostValidation
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("dcvType")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $dcvType;

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
     * @var string
     * @Type("string")
     * @SerializedName("dcvEmail")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $dcvEmail;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("dnsRecord")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $dnsRecord;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("dnsCnameValue")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $dnsCnameValue;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("fileLocation")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $fileLocation;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("fileContents")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $fileContents;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HostValidation
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDcvType()
    {
        return $this->dcvType;
    }

    /**
     * @param string $dcvType
     * @return HostValidation
     */
    public function setDcvType($dcvType)
    {
        $this->dcvType = $dcvType;
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
     * @return HostValidation
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
     * @return HostValidation
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getDcvEmail()
    {
        return $this->dcvEmail;
    }

    /**
     * @param string $dcvEmail
     * @return HostValidation
     */
    public function setDcvEmail($dcvEmail)
    {
        $this->dcvEmail = $dcvEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getDnsRecord()
    {
        return $this->dnsRecord;
    }

    /**
     * @param string $dnsRecord
     * @return HostValidation
     */
    public function setDnsRecord($dnsRecord)
    {
        $this->dnsRecord = $dnsRecord;
        return $this;
    }

    /**
     * @return string
     */
    public function getDnsCnameValue()
    {
        return $this->dnsCnameValue;
    }

    /**
     * @param string $dnsCnameValue
     * @return HostValidation
     */
    public function setDnsCnameValue($dnsCnameValue)
    {
        $this->dnsCnameValue = $dnsCnameValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileLocation()
    {
        return $this->fileLocation;
    }

    /**
     * @param string $fileLocation
     * @return HostValidation
     */
    public function setFileLocation($fileLocation)
    {
        $this->fileLocation = $fileLocation;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileContents()
    {
        return $this->fileContents;
    }

    /**
     * @param string $fileContents
     * @return HostValidation
     */
    public function setFileContents($fileContents)
    {
        $this->fileContents = $fileContents;
        return $this;
    }
}
