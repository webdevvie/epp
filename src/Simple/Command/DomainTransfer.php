<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Transfer\DomainTransferMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainContact;
use Webdevvie\Epp\Messages\Command\Create\DomainCreateMessage;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;
use Webdevvie\Epp\Messages\Snippets\Host\Addr;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainTransfer extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Messages\EppMessage';

    /**
     * DomainTransfer constructor.
     * @param string $name
     * @param string $authCode
     * @param integer    $period
     * @param string $periodUnit
     */
    public function __construct(
        $name,
        $authCode = '',
        $period = 1,
        $periodUnit = 'y'
    ) {
        $command = new CommandMessage();
        $transfer = new TransferMessage();
        $transfer->setOp('request');
        $command->setTransfer($transfer);
        $DomainTransfer = new DomainTransferMessage();
        $DomainTransfer->setName($name);
        $DomainTransfer->setAuthInfo($authCode);
        $per = new Period();
        $per->setUnit($periodUnit);
        $per->setAmount($period);
        $DomainTransfer->setPeriod($per);
        $transfer->setDomainTransfer($DomainTransfer);
        $this->setCommand($command);
    }
}
