<?php

namespace Webdevvie\Epp\Simple;

use Webdevvie\Epp\Messages\Command;
use Webdevvie\Epp\Messages\EppMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use Webdevvie\Nestis\Nestis;
use JMS\Serializer\Annotation\XmlRoot;

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
