<?php

namespace Webdevvie\Epp\Simple\Response;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCD;
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
        $results = $this->nestis->getNestedItem('response/resData/chkData/domainCd', $this, []);
        foreach ($results as $result) {
            /**
             * @var DomainCD $result
             */
            $name = $result->getDomainName();
            $reason = $this->nestis->getNestedItem('reason/reason', $result, '');
            $out[$name->getName()] = [
                'name' => $name->getName(),
                'available' => $name->isAvailable(),
                'reason' => $reason
            ];
        }
        return $out;
    }
}
