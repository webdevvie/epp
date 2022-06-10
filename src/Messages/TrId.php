<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class TrId
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("clTRID")
     * @XmlElement(cdata=false)
     *
     * @Expose
     */
    protected $clTRID;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("svTRID")
     * @XmlElement(cdata=false)
     *
     * @Expose
     */
    protected $svTRID;


    /**
     * @return string
     */
    public function getSvTRID()
    {
        return $this->svTRID;
    }

    /**
     * @param string $svTRID
     * @return TrId
     */
    public function setSvTRID($svTRID)
    {
        $this->svTRID = $svTRID;
        return $this;
    }

    /**
     * @return string
     */
    public function getClTRID()
    {
        return $this->clTRID;
    }

    /**
     * @param string $clTRID
     * @return TrId
     */
    public function setClTRID($clTRID)
    {
        $this->clTRID = $clTRID;
        return $this;
    }
}
