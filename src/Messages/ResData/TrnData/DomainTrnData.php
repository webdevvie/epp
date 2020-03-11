<?php
namespace Webdevvie\Epp\Messages\ResData\TrnData;

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
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainTrnData extends AbstractCommandMessage
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
     * @SerializedName("trStatus")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $trStatus;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("reID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $reID;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("reDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $reDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("acID")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $acID;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("acDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $acDate;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("exDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $exDate;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainTrnData
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrStatus()
    {
        return $this->trStatus;
    }

    /**
     * @param string $trStatus
     * @return DomainTrnData
     */
    public function setTrStatus($trStatus)
    {
        $this->trStatus = $trStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getReID()
    {
        return $this->reID;
    }

    /**
     * @param string $reID
     * @return DomainTrnData
     */
    public function setReID($reID)
    {
        $this->reID = $reID;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReDate(): ?string
    {
        return $this->reDate;
    }

    /**
     * @param string|null $reDate
     * @return DomainTrnData
     */
    public function setReDate(?string $reDate): DomainTrnData
    {
        $this->reDate = $reDate;
        return $this;
    }



    /**
     * @return string
     */
    public function getAcID()
    {
        return $this->acID;
    }

    /**
     * @param string $acID
     * @return DomainTrnData
     */
    public function setAcID($acID)
    {
        $this->acID = $acID;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAcDate(): ?string
    {
        return $this->acDate;
    }

    /**
     * @param string|null $acDate
     * @return DomainTrnData
     */
    public function setAcDate(?string $acDate): DomainTrnData
    {
        $this->acDate = $acDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExDate(): ?string
    {
        return $this->exDate;
    }

    /**
     * @param string|null $exDate
     * @return DomainTrnData
     */
    public function setExDate(?string $exDate): DomainTrnData
    {
        $this->exDate = $exDate;
        return $this;
    }

}
