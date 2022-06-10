<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn\ResellerExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-reseller-1.0", prefix="reseller")
 */
class Rem extends Add
{
}
