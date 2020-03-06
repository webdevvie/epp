<?php

namespace Webdevvie\Epp\Messages\ResData\InfData;

use DateTime;
use DateTimeZone;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Update;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Validation;

/**
 * Class SSLInfData
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLInfData extends AbstractCommandMessage
{
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("certificateId")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $certificateId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("provisioningId")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $provisioningId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("commonName")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $commonName;

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
     * @SerializedName("created")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $created;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("modified")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $modified;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("expires")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $expires;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("downloadLink")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $downloadLink;

    /**
     * @var Validation[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Validation>")
     * @SerializedName("validation")
     * @XmlList(inline=true, entry="validation",  namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     * @Expose
     */
    protected $validation;

    /**
     * @var Update
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Update")
     * @SerializedName("update")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     * @Expose
     */
    protected $update;

    /**
     * @return integer
     */
    public function getCertificateId()
    {
        return $this->certificateId;
    }

    /**
     * @param integer $certificateId
     * @return SSLInfData
     */
    public function setCertificateId($certificateId)
    {
        $this->certificateId = $certificateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvisioningId()
    {
        return $this->provisioningId;
    }

    /**
     * @param string $provisioningId
     * @return SSLInfData
     */
    public function setProvisioningId($provisioningId)
    {
        $this->provisioningId = $provisioningId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommonName()
    {
        return $this->commonName;
    }

    /**
     * @param string $commonName
     * @return SSLInfData
     */
    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
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
     * @return SSLInfData
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return new DateTime($this->created, new DateTimeZone('UTC'));
    }

    /**
     * @param DateTime $created
     * @return SSLInfData
     */
    public function setCreated(DateTime $created)
    {
        $this->created = $created->format("Y-m-d H:i:s") . ' UTC';
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getModified()
    {
        return new DateTime($this->modified, new DateTimeZone('UTC'));
    }

    /**
     * @param DateTime $modified
     * @return SSLInfData
     */
    public function setModified(DateTime $modified)
    {
        $this->modified = $modified->format("Y-m-d H:i:s") . ' UTC';
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpires()
    {
        return new DateTime($this->expires, new DateTimeZone('UTC'));
    }

    /**
     * @param DateTime $expires
     * @return SSLInfData
     */
    public function setExpires(DateTime $expires)
    {
        $this->expires = $expires->format("Y-m-d H:i:s") . ' UTC';
        return $this;
    }

    /**
     * @return Validation[]
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param Validation[] $validation
     * @return SSLInfData
     */
    public function setValidation(array $validation)
    {
        $this->validation = $validation;
        return $this;
    }

    /**
     * @return Update
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param Update $update
     * @return SSLInfData
     */
    public function setUpdate(Update $update)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadLink()
    {
        return $this->downloadLink;
    }

    /**
     * @param string $downloadLink
     * @return SSLInfData
     */
    public function setDownloadLink($downloadLink)
    {
        $this->downloadLink = $downloadLink;
        return $this;
    }
}
