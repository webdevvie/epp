<?php

namespace Webdevvie\Epp\Messages\ResData\InfData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainContact;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainHost;
use Webdevvie\Epp\Messages\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Snippets\Domain\Status;

/**
 * Class Domain
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
class DomainInfData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("roid")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $roid;

    /**
     * @var Status[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\Status>")
     * @XmlList(inline=true, entry="status", namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $status = [];

    /**
     * @var string
     * @Type("string")
     * @SerializedName("registrant")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $registrant;

    /**
     * @var DomainContact[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\DomainContact>")
     * @XmlList(inline=true, entry="contact", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $contact = [];

    /**
     * @var Ns
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\Ns")
     * @SerializedName("ns")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $ns;

    /**
     * @var DomainHost[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Domain\DomainHost>")
     * @XmlList(inline=true, entry="host", namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $host = [];

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $clId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("crID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $crId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("upID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $upId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("upDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $upDate;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("exDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $exDate;

    /**
     * @var AuthInfo
     * @Type("Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo")
     * @SerializedName("authInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $authInfo;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainInfData
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }



    /**
     * @return string
     */
    public function getRoid()
    {
        return $this->roid;
    }

    /**
     * @param string $roid
     * @return DomainInfData
     */
    public function setRoid($roid)
    {
        $this->roid = $roid;
        return $this;
    }


    /**
     * @return Ns
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * @param Ns $ns
     * @return DomainInfData
     */
    public function setNs(Ns $ns)
    {
        $this->ns = $ns;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrant()
    {
        return $this->registrant;
    }

    /**
     * @param string $registrant
     * @return DomainInfData
     */
    public function setRegistrant($registrant)
    {
        $this->registrant = $registrant;
        return $this;
    }

    /**
     * @return array
     */
    public function getContacts()
    {
        return $this->contact;
    }

    /**
     * @param DomainContact $contact
     * @return DomainInfData
     */
    public function addContact(DomainContact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * @return array
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param array $host
     * @return DomainInfData
     */
    public function setHost(array $host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param array $status
     * @return DomainInfData
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return AuthInfo
     */
    public function getAuthInfo()
    {
        return $this->authInfo;
    }

    /**
     * @param AuthInfo $authInfo
     * @return DomainInfData
     */
    public function setAuthInfo(AuthInfo $authInfo)
    {
        $this->authInfo = $authInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getClId()
    {
        return $this->clId;
    }

    /**
     * @param string $clId
     * @return DomainInfData
     */
    public function setClId($clId)
    {
        $this->clId = $clId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCrId()
    {
        return $this->crId;
    }

    /**
     * @param string $crId
     * @return DomainInfData
     */
    public function setCrId($crId)
    {
        $this->crId = $crId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpId()
    {
        return $this->upId;
    }

    /**
     * @param string $upId
     * @return DomainInfData
     */
    public function setUpId($upId)
    {
        $this->upId = $upId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrDate()
    {
        return $this->crDate;
    }

    /**
     * @param string|null $crDate
     * @return DomainInfData
     */
    public function setCrDate(string $crDate): DomainInfData
    {
        $this->crDate = $crDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpDate()
    {
        return $this->upDate;
    }

    /**
     * @param string|null $upDate
     * @return DomainInfData
     */
    public function setUpDate(string $upDate): DomainInfData
    {
        $this->upDate = $upDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExDate()
    {
        return $this->exDate;
    }

    /**
     * @param string|null $exDate
     * @return DomainInfData
     */
    public function setExDate(string $exDate): DomainInfData
    {
        $this->exDate = $exDate;
        return $this;
    }

}
