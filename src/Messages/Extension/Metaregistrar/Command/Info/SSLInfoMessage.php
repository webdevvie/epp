<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Info;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Info
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLInfoMessage extends AbstractCommandMessage
{
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("certificateId")
     * @XmlElement(cdata=false, namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $certificateId;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("regenerateDownload")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $regenerateDownload;

    /**
     * @return string
     */
    public function getCertificateId()
    {
        return $this->certificateId;
    }

    /**
     * @param string $certificateId
     * @return SSLInfoMessage
     */
    public function setCertificateId($certificateId)
    {
        $this->certificateId = $certificateId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isRegenerateDownload()
    {
        return $this->regenerateDownload;
    }

    /**
     * @param boolean $regenerateDownload
     * @return SSLInfoMessage
     */
    public function setRegenerateDownload($regenerateDownload)
    {
        $this->regenerateDownload = $regenerateDownload;
        return $this;
    }
}
