<?php

namespace Webdevvie\Epp\Simple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\EppMessage;

/**
 * Class SimpleEppMessage
 * @package Webdevvie\Epp\Simple
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class SimpleEppCommand extends EppMessage
{
    /**
     * @var string
     */
    protected $mappedResponse = '';

    /**
     * @return string
     */
    public function getMappedResponse()
    {
        return $this->mappedResponse;
    }
}
