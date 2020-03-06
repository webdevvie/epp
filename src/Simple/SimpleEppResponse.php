<?php

namespace Webdevvie\Epp\Simple;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Nestis\Nestis;

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
