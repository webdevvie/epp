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
class DcpAccess
{
    /**
     * @var DcpAccessAll
     * @Type("Webdevvie\Epp\Messages\Snippets\DcpAccessAll")
     * @SerializedName("all")
     *
     * @Expose
     */
    protected $all;

    /**
     * @return DcpAccessAll
     */
    public function getAll(): DcpAccessAll
    {
        return $this->all;
    }

    /**
     * @param DcpAccessAll $all
     * @return DcpAccess
     */
    public function setAll(DcpAccessAll $all): DcpAccess
    {
        $this->all = $all;
        return $this;
    }
}
