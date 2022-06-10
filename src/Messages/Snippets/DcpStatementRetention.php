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
class DcpStatementRetention
{
    /**
     * @var DcpStatementRetentionStated|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientOurs")
     * @SerializedName("stated")
     *
     * @Expose
     */
    protected $stated;

    /**
     * @return DcpStatementRetentionStated|null
     */
    public function getStated(): ?DcpStatementRetentionStated
    {
        return $this->stated;
    }

    /**
     * @param DcpStatementRetentionStated|null $stated
     * @return DcpStatementRetention
     */
    public function setStated(?DcpStatementRetentionStated $stated): DcpStatementRetention
    {
        $this->stated = $stated;
        return $this;
    }
}
