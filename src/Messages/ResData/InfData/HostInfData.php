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
use Webdevvie\Epp\Messages\Snippets\Host\Addr;
use Webdevvie\Epp\Messages\Snippets\Host\Status;

/**
 * Class Host
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class HostInfData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("roid")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $roid;

    /**
     * @var Status[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Host\Status>")
     * @XmlList(inline=true, entry="status",  namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $status = [];

    /**
     * @var Addr[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Host\Addr>")
     * @XmlList(inline=true, entry="addr",  namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $addr = [];

    /**
     * @var string
     * @Type("string")
     * @SerializedName("clID")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $clId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("crID")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     *
     * @Expose
     */
    protected $crId;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("crDate")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     * @expose
     */
    protected $crDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("upDate")
     * @XmlElement(cdata=false, namespace="urn:ietf:params:xml:ns:host-1.0")
     * @expose
     */
    protected $upDate;

    /**
     * @param Addr $ip
     * @return void
     */
    public function addAddress(Addr $ip)
    {
        $this->addr[] = $ip;
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
     * @return HostInfData
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
     * @return HostInfData
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
     * @param Status $status
     * @return HostInfData
     */
    public function addStatus(Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCrDate()
    {
        return $this->crDate;
    }

    /**
     * @param \DateTime|null $crDate
     * @return HostInfData
     */
    public function setCrDate($crDate)
    {
        $this->crDate = $crDate;
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
     * @return HostInfData
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
     * @return HostInfData
     */
    public function setCrId($crId)
    {
        $this->crId = $crId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpDate(): ?string
    {
        return $this->upDate;
    }

    /**
     * @param string $upDate
     * @return HostInfData
     */
    public function setUpDate(string $upDate): HostInfData
    {
        $this->upDate = $upDate;
        return $this;
    }

    /**
     * @return Addr[]
     */
    public function getAddr(): array
    {
        return $this->addr;
    }

    /**
     * @param Addr[] $addr
     * @return HostInfData
     */
    public function setAddr(array $addr): HostInfData
    {
        $this->addr = $addr;
        return $this;
    }
}
