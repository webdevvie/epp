<?php

namespace Webdevvie\Epp\Messages\ResData\RenData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

use JMS\Serializer\Annotation\PostSerialize;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\SSLInfData;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ResData\InfData\DnsInfData;

/**
 * Class Dns
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 */
class SSLRenData extends SSLInfData
{

}
