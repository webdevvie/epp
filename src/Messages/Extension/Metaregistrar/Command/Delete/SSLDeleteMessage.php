<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Delete;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLDeleteMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("certificateId")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $certificateId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("reason")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $reason;


    /**
     * @return string
     */
    public function getCertificateId()
    {
        return $this->certificateId;
    }

    /**
     * @param string $certificateId
     * @return SSLDeleteMessage
     */
    public function setCertificateId($certificateId)
    {
        $this->certificateId = $certificateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return SSLDeleteMessage
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
