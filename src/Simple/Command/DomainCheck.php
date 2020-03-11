<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Check\DomainCheckMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainCheck extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainCheck';

    /**
     * DomainCheck constructor.
     * @param string[] $names
     */
    public function __construct(array $names)
    {
        $command = new CommandMessage();
        $check = new CheckMessage();
        $command->setCheck($check);
        $domainCheck = new DomainCheckMessage();
        $domainCheck->setNames($names);
        $check->setDomainCheck($domainCheck);
        $this->setCommand($command);
    }
}
