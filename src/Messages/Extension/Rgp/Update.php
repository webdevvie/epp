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
class Update extends AbstractCommandMessage
{
    /**
     * @var Restore
     * @Type("Webdevvie\Epp\Messages\Extension\Rgp\Restore")
     * @SerializedName("restore")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:rgp-1.0")
     *
     * @Expose
     */
    protected $restore;

    /**
     * @return Restore
     */
    public function getRestore()
    {
        return $this->restore;
    }

    /**
     * @param Restore $restore
     * @return Update
     */
    public function setRestore(Restore $restore)
    {
        $this->restore = $restore;
        return $this;
    }
}
