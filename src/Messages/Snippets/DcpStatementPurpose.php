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
class DcpStatementPurpose
{
    /**
     * @var DcpStatementPurposeAdmin|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurposeAdmin")
     * @SerializedName("admin")
     *
     * @Expose
     */
    protected $admin;
    /**
     * @var DcpStatementPurposeProv|null
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpStatementPurposeProv")
     * @SerializedName("prov")
     *
     * @Expose
     */
    protected $prov;

    /**
     * @return DcpStatementPurposeAdmin|null
     */
    public function getAdmin(): ?DcpStatementPurposeAdmin
    {
        return $this->admin;
    }

    /**
     * @param DcpStatementPurposeAdmin|null $admin
     * @return DcpStatementPurpose
     */
    public function setAdmin(?DcpStatementPurposeAdmin $admin): DcpStatementPurpose
    {
        $this->admin = $admin;
        return $this;
    }

    /**
     * @return DcpStatementPurposeProv|null
     */
    public function getProv(): ?DcpStatementPurposeProv
    {
        return $this->prov;
    }

    /**
     * @param DcpStatementPurposeProv|null $prov
     * @return DcpStatementPurpose
     */
    public function setProv(?DcpStatementPurposeProv $prov): DcpStatementPurpose
    {
        $this->prov = $prov;
        return $this;
    }
}
