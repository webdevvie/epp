<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Command\Renew;

use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Approver;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Hosts;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Renew
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLRenewMessage extends AbstractCommandMessage
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
     * @SerializedName("type")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $type;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("csr")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $csr;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("product")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $product;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("years")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $years;

    /**
     * @var Hosts
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Hosts")
     * @SerializedName("hosts")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $hosts;

    /**
     * @var Approver
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\SSL\Approver")
     * @SerializedName("approver")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $approver;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("language")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/ssl-1.0")
     *
     * @Expose
     */
    protected $language;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.ssl::renew';

    /**
     * @return string
     */
    public function getCsr()
    {
        return $this->csr;
    }

    /**
     * @param string $csr
     * @return SSLRenewMessage
     */
    public function setCsr($csr)
    {
        $this->csr = $csr;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return SSLRenewMessage
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return integer
     */
    public function getYears()
    {
        return $this->years;
    }

    /**
     * @param integer $years
     * @return SSLRenewMessage
     */
    public function setYears($years)
    {
        $this->years = $years;
        return $this;
    }

    /**
     * @return Hosts
     */
    public function getHosts()
    {
        return $this->hosts;
    }

    /**
     * @param Hosts $hosts
     * @return SSLRenewMessage
     */
    public function setHosts(Hosts $hosts)
    {
        $this->hosts = $hosts;
        return $this;
    }

    /**
     * @return Approver
     */
    public function getApprover()
    {
        return $this->approver;
    }

    /**
     * @param Approver $approver
     * @return SSLRenewMessage
     */
    public function setApprover(Approver $approver)
    {
        $this->approver = $approver;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return SSLRenewMessage
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getCertificateId()
    {
        return $this->certificateId;
    }

    /**
     * @param string $certificateId
     * @return SSLRenewMessage
     */
    public function setCertificateId($certificateId)
    {
        $this->certificateId = $certificateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return SSLRenewMessage
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
}
