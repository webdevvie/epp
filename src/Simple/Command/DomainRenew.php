<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Renew\DomainRenewMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainRenewName;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainRenew extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainInfo';

    /**
     * DomainRenew constructor.
     * @param string  $name
     * @param string  $expirationDate
     * @param integer $period
     * @param string  $periodUnit
     */
    public function __construct($name, $expirationDate, $period = null, $periodUnit = 'm')
    {
        $command = new CommandMessage();
        $renew = new RenewMessage();
        $command->setRenew($renew);
        $domainRenew = new DomainRenewMessage();

        if (is_numeric($period)) {
            $per = new Period();
            $per->setUnit($periodUnit);
            $per->setAmount($period);
            $domainRenew->setPeriod($per);
        }
        $domainRenew->setName($name);
        $domainRenew->setCurExpDate($expirationDate);
        $renew->setDomainRenew($domainRenew);
        $this->setCommand($command);
    }
}
