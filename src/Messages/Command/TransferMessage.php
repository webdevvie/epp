<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\AbstractEppMessage;
use Webdevvie\Epp\Messages\Command\Transfer\ContactTransferMessage;
use Webdevvie\Epp\Messages\Command\Transfer\DomainTransferMessage;

/**
 * Class Command
 *
 * @package Webdevvie\Epp\Messages\Command\Transfer
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class TransferMessage extends AbstractEppMessage
{
    /**
     * @var ContactTransferMessage
     * @Type("Webdevvie\Epp\Messages\Command\Transfer\ContactTransferMessage")
     * @SerializedName("transfer")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $contactTransfer;

    /**
     * @var DomainTransferMessage
     * @Type("Webdevvie\Epp\Messages\Command\Transfer\DomainTransferMessage")
     * @SerializedName("transfer")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $domainTransfer;

    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     *
     * @Expose
     */
    protected $op;

    /**
     * @return ContactTransferMessage
     */
    public function getContactTransfer()
    {
        return $this->contactTransfer;
    }

    /**
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * @param string $op
     * @return TransferMessage
     */
    public function setOp($op)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * @return DomainTransferMessage
     */
    public function getDomainTransfer()
    {
        return $this->domainTransfer;
    }

    /**
     * @param DomainTransferMessage $domainTransfer
     * @return TransferMessage
     */
    public function setDomainTransfer(DomainTransferMessage $domainTransfer)
    {
        $this->domainTransfer = $domainTransfer;
        return $this;
    }
}
