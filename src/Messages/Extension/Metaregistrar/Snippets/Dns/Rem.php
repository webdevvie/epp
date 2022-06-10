<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Dns
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class Rem extends Add
{
}
