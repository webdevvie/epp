<?php

namespace Webdevvie\Epp\Simple\Response;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Response\ResData\Domain\Cd;
use Webdevvie\Epp\Simple\SimpleEppResponse;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Response
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainCheck extends SimpleEppResponse
{
    /**
     * @return array
     */
    public function getCheckResults()
    {
        $out = [];
        $results = $this->nestis->getNestedItem('response/resData/domainChkData/cd', $this, []);
        foreach ($results as $result) {
            /**
             * @var Cd $result
             */
            $name = $result->getName();
            $reason = $this->nestis->getNestedItem('reason/reason', $result, '');
            $out[$name->getName()] = [
                'name' => $name->getName(),
                'available' => $name->isAvail(),
                'reason' => $reason
            ];
        }
        return $out;
    }
}
