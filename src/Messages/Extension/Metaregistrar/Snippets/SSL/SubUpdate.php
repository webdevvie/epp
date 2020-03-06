<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Contact\Addr;

/**
 * Class Hosts
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SubUpdate extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("messageCode")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $messageCode;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("message")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $message;

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
     * @param \DOMDocument $dom
     * @param \DOMNode     $parentNode
     * @param string       $ns
     * @return void
     */
    public function appendSelf(\DOMDocument $dom, \DOMNode $parentNode, $ns)
    {
        $el = $this->appendNSNodeWithValueAndAttributes($dom, $parentNode, $ns, 'subUpdate');
        foreach ($this->getFlatProperties() as $prop => $val) {
            if (is_null($val)||$val =='') {
                continue;
            }
            $this->appendNSNodeWithValueAndAttributes($dom, $el, $ns, $prop, $val);
        }
    }

    /**
     * @param array $subMessage
     * @return void
     */
    public function fillFromSubMessage(array $subMessage)
    {

        $map = [
            "messageCode" => "message_code",
            "message" => "message",
            "type" => "type",
            "name" => "domainName",
            "dcvType" => "dcvType",
            "dnsRecord" => "cname",
            "dnsCnameValue" => "cnameValue",
            "fileLocation" => "fileLocation",
            "fileContents" => "fileContents",
            "dcvEmail" => "emailAddr",
        ];
        foreach ($map as $k => $v) {
            if (!isset($subMessage[$v]) || is_null($subMessage[$v])) {
                continue;
            }
            $this->$k = $subMessage[$v];
        }
    }

    /**
     * @return string
     */
    public function getMessageCode()
    {
        return $this->messageCode;
    }

    /**
     * @param string $messageCode
     * @return SubUpdate
     */
    public function setMessageCode($messageCode)
    {
        $this->messageCode = $messageCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return SubUpdate
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SubUpdate
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
     * @return SubUpdate
     */
    public function setDcvType($dcvType)
    {
        $this->dcvType = $dcvType;
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
     * @return SubUpdate
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
     * @return SubUpdate
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
     * @return SubUpdate
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
     * @return SubUpdate
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
     * @return SubUpdate
     */
    public function setFileContents($fileContents)
    {
        $this->fileContents = $fileContents;
        return $this;
    }
}
