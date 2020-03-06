<?php

namespace Webdevvie\Epp\Messages\Command\Logout;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class LogoutMessage
 *
 * @package Webdevvie\Epp\Messages\Command\LogoutMessage
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class LogoutMessage extends AbstractCommandMessage
{
}
