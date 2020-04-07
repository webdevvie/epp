<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Check\HostCheckMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\Info\HostInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class HostInfo
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class HostCheck extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\HostInfo';

    /**
     * HostInfo constructor.
     * @param string[] $hostnames
     */
    public function __construct($hostnames)
    {
        $command = new CommandMessage();
        $check = new CheckMessage();
        $command->setCheck($check);
        $hostCheck = new HostCheckMessage();
        $hostCheck->setNames($hostnames);
        $check->setHostCheck($hostCheck);
        $this->setCommand($command);
    }
}
