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
class DcpStatementPurpose
{
    /**
     * @var DcpStatementPurposeAdmin
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurposeAdmin")
     * @SerializedName("admin")
     *
     * @Expose
     */
    protected $admin;
    /**
     * @var DcpStatementPurposeProv
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurposeProv")
     * @SerializedName("prov")
     *
     * @Expose
     */
    protected $prov;

    /**
     * @return DcpStatementPurposeAdmin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param DcpStatementPurposeAdmin $admin
     * @return DcpStatementPurpose
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
        return $this;
    }
}
