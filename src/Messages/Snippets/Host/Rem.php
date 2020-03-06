<?php
namespace Webdevvie\Epp\Messages\Snippets\Host;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Host
 *
 * @package Webdevvie\Epp\Messages\Snippets\Host
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 */
class Rem extends Add
{
}
