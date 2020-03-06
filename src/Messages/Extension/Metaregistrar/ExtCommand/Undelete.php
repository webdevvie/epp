<?php
namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use JMS\Serializer\Annotation\XmlElement;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ext-1.0", prefix="ext")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class Undelete extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @Expose
     */
    protected $name;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.domain::undelete';
}
