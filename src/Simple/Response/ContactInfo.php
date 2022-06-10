<?php

namespace Webdevvie\Epp\Simple\Response;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Response\ResData\Domain\Cd;
use Webdevvie\Epp\Simple\SimpleEppResponse;

/**
 * Class ContactInfo
 * @package Webdevvie\Epp\Simple\Response
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class ContactInfo extends SimpleEppResponse
{

}
