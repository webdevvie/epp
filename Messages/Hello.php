<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Fragment\SvcMenu;

/**
 * @ExclusionPolicy("all")
 */
class Hello
{

}
