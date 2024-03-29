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
use Webdevvie\Epp\Messages\Snippets\Contact\Disclose;
use Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo;
use Webdevvie\Epp\Messages\Snippets\Contact\Status;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactInfData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("roid")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $roid;

    /**
     * @var Status[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Contact\Status>")
     * @XmlList(inline=true, entry="status",  namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $status = [];

    /**
     * @var PostalInfo
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo")
     * @SerializedName("postalInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $postalInfo;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("voice")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $voice;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("fax")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $fax;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("email")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $email;

    /**
     * @var string
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\AuthInfo")
     * @SerializedName("authInfo")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $authInfo;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $clId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("crID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $crId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("upID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $upId;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("upDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @expose
     */
    protected $upDate;

    /**
     * @var Disclose
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\Disclose")
     * @SerializedName("disclose")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $disclose;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactInfData
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * @param string $voice
     * @return ContactInfData
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return ContactInfData
     */
    public function setEmail($email)
    {
        if ($email == '') {
            $email = 'unknown@yourdomainprovider.net';
        }
        $this->email = $email;
        return $this;
    }

    /**
     * @return PostalInfo
     */
    public function getPostalInfo()
    {
        return $this->postalInfo;
    }

    /**
     * @param string $postalInfo
     * @return ContactInfData
     */
    public function setPostalInfo($postalInfo)
    {
        $this->postalInfo = $postalInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @return ContactInfData
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthInfo()
    {
        return $this->authInfo;
    }

    /**
     * @param string $authInfo
     * @return ContactInfData
     */
    public function setAuthInfo($authInfo)
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
     * @return ContactInfData
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
     * @return ContactInfData
     */
    public function setCrId($crId)
    {
        $this->crId = $crId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrDate(): ?string
    {
        return $this->crDate;
    }

    /**
     * @param string|null $crDate
     * @return ContactInfData
     */
    public function setCrDate(?string $crDate): ContactInfData
    {
        $this->crDate = $crDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpDate(): ?string
    {
        return $this->upDate;
    }

    /**
     * @param string|null $upDate
     * @return ContactInfData
     */
    public function setUpDate(?string $upDate): ContactInfData
    {
        $this->upDate = $upDate;
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
     * @return ContactInfData
     */
    public function setUpId($upId)
    {
        $this->upId = $upId;
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
     * @return ContactInfData
     */
    public function setRoid($roid)
    {
        $this->roid = $roid;
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
     * @return ContactInfData
     */
    public function setStatusses(array $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param Status $status
     * @return void
     */
    public function addStatus(Status $status)
    {
        $this->status[] = $status;
    }

    /**
     * @return Disclose
     */
    public function getDisclose()
    {
        return $this->disclose;
    }

    /**
     * @param Disclose $disclose
     * @return ContactInfData
     */
    public function setDisclose(Disclose $disclose)
    {
        $this->disclose = $disclose;
        return $this;
    }
}
