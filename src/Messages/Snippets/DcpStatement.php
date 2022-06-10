<?php

namespace Webdevvie\Epp\Messages\Snippets;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class DcpAccess
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class DcpStatement
{
    /**
     * @var DcpStatementPurpose|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurpose")
     * @SerializedName("purpose")
     *
     * @Expose
     */
    protected $purpose;

    /**
     * @var DcpStatementRecipient|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipient")
     * @SerializedName("recipient")
     *
     * @Expose
     */
    protected $recipient;
    /**
     * @var DcpStatementRetention|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRetention")
     * @SerializedName("retention")
     *
     * @Expose
     */
    protected $retention;

    /**
     * @return DcpStatementPurpose|null
     */
    public function getPurpose(): ?DcpStatementPurpose
    {
        return $this->purpose;
    }

    /**
     * @param DcpStatementPurpose|null $purpose
     * @return DcpStatement
     */
    public function setPurpose(?DcpStatementPurpose $purpose): DcpStatement
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * @return DcpStatementRecipient|null
     */
    public function getRecipient(): ?DcpStatementRecipient
    {
        return $this->recipient;
    }

    /**
     * @param DcpStatementRecipient|null $recipient
     * @return DcpStatement
     */
    public function setRecipient(?DcpStatementRecipient $recipient): DcpStatement
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return DcpStatementRetention|null
     */
    public function getRetention(): ?DcpStatementRetention
    {
        return $this->retention;
    }

    /**
     * @param DcpStatementRetention|null $retention
     * @return DcpStatement
     */
    public function setRetention(?DcpStatementRetention $retention): DcpStatement
    {
        $this->retention = $retention;
        return $this;
    }
}
