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
class DcpStatementRecipient
{
    /**
     * @var DcpStatementRecipientOurs|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientOurs")
     * @SerializedName("ours")
     *
     * @Expose
     */
    protected $ours;
    /**
     * @var DcpStatementRecipientPublic|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientPublic")
     * @SerializedName("public")
     *
     * @Expose
     */
    protected $public;

    /**
     * @return DcpStatementRecipientOurs|null
     */
    public function getOurs(): ?DcpStatementRecipientOurs
    {
        return $this->ours;
    }

    /**
     * @param DcpStatementRecipientOurs|null $ours
     * @return DcpStatementRecipient
     */
    public function setOurs(?DcpStatementRecipientOurs $ours): DcpStatementRecipient
    {
        $this->ours = $ours;
        return $this;
    }

    /**
     * @return DcpStatementRecipientPublic|null
     */
    public function getPublic(): ?DcpStatementRecipientPublic
    {
        return $this->public;
    }

    /**
     * @param DcpStatementRecipientPublic|null $public
     * @return DcpStatementRecipient
     */
    public function setPublic(?DcpStatementRecipientPublic $public): DcpStatementRecipient
    {
        $this->public = $public;
        return $this;
    }
}
