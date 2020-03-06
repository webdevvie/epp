<?php
namespace Webdevvie\Epp\Messages\Extension\Rgp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:rgp-1.0", prefix="rgp")
 */
class UpData extends AbstractCommandMessage
{
    /**
     * @var RgpStatus
     * @Type("Webdevvie\Epp\Messages\Extension\Rgp\RgpStatus")
     * @SerializedName("rgpStatus")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:rgp-1.0")
     *
     * @Expose
     */
    protected $rgpStatus;

    /**
     * @return RgpStatus
     */
    public function getRgpStatus()
    {
        return $this->rgpStatus;
    }

    /**
     * @param RgpStatus $rgpStatus
     * @return UpData
     */
    public function setRgpStatus(RgpStatus $rgpStatus)
    {
        $this->rgpStatus = $rgpStatus;
        return $this;
    }
}
