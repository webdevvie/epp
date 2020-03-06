<?php

namespace Webdevvie\Epp\Simple;

use Webdevvie\Epp\Messages\Command;
use Webdevvie\Epp\Messages\EppMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use Webdevvie\Nestis\Nestis;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Class SimpleEppResponse
 * @package Webdevvie\Epp\Simple
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class SimpleEppResponse extends EppMessage
{
    /**
     * @var Nestis
     */
    protected $nestis;

    /**
     * @return integer
     */
    public function getResponseCode()
    {
        return $this->nestis->getNestedItem("response/result/code", $this, 0);
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->nestis->getNestedItem("response/result/msg", $this, 0);
    }

    /**
     * @param Nestis $nestis
     * @return SimpleEppResponse
     */
    public function setNestis(Nestis $nestis)
    {
        $this->nestis = $nestis;
        return $this;
    }
}
