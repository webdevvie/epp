<?php
namespace Webdevvie\Epp\Messages\Command\Logout;

use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class LogoutMessage
 *
 * @package Webdevvie\Epp\Messages\Command\LogoutMessage
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class LogoutMessage extends AbstractCommandMessage
{
    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.login::logout';
}
