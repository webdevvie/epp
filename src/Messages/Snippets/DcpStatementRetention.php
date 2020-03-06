<?php
namespace Webdevvie\Epp\Messages\Snippets;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\Login\SvcExtension;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class DcpAccess
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class DcpStatementRetention
{
    /**
     * @var DcpStatementRetentionStated
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementRecipientOurs")
     * @SerializedName("stated")
     *
     * @Expose
     */
    protected $stated;

    /**
     * @return DcpStatementRetentionStated
     */
    public function getStated()
    {
        return $this->stated;
    }

    /**
     * @param DcpStatementRetentionStated $stated
     * @return DcpStatementRetention
     */
    public function setStated($stated)
    {
        $this->stated = $stated;
        return $this;
    }
}
