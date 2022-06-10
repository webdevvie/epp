<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @XmlRoot("epp")
 */
abstract class AbstractEppMessage
{

}
