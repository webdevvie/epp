<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\CreData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\DnsInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\SSLInfData;

/**
 * Class Dns
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLCreData extends SSLInfData
{

}
