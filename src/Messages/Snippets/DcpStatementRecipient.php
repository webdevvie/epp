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
     * @var DcpStatementRecipientOurs
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientOurs")
     * @SerializedName("ours")
     *
     * @Expose
     */
    protected $ours;
    /**
     * @var DcpStatementRecipientPublic
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientPublic")
     * @SerializedName("public")
     *
     * @Expose
     */
    protected $public;

    /**
     * @return DcpStatementRecipientOurs
     */
    public function getOurs()
    {
        return $this->ours;
    }

    /**
     * @param DcpStatementRecipientOurs $ours
     * @return DcpStatementRecipient
     */
    public function setOurs($ours)
    {
        $this->ours = $ours;
        return $this;
    }
}
