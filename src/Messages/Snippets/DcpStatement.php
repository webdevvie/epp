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
     * @var DcpStatementPurpose
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurpose")
     * @SerializedName("purpose")
     *
     * @Expose
     */
    protected $purpose;

    /**
     * @var DcpStatementRecipient
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipient")
     * @SerializedName("recipient")
     *
     * @Expose
     */
    protected $recipient;
    /**
     * @var DcpStatementRetention
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRetention")
     * @SerializedName("retention")
     *
     * @Expose
     */
    protected $retention;

    /**
     * @return DcpStatementPurpose
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param DcpStatementPurpose $purpose
     * @return DcpStatement
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }
}
