<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\Create;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\Info;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\Transfer;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\Update;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-contact-1.0", prefix="command-ext-contact")
 */
class Contact extends AbstractCommandMessage
{


    /**
     * @var Update
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Contact\Update")
     * @SerializedName("update")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-contact-1.0")
     * @Expose
     */
    protected $update;


    /**
     * @return Update
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param Update $update
     * @return Contact
     */
    public function setUpdate(Update $update)
    {
        $this->update = $update;
        return $this;
    }
}
