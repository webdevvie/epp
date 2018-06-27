<?php

namespace Webdevvie\Epp\Simple\Command;

use Webdevvie\Epp\Messages\Command;
use Webdevvie\Epp\Messages\EppMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use Webdevvie\Epp\Simple\SimpleEppCommand;
use JMS\Serializer\Annotation\XmlRoot;

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
        $command = new Command();
        $check = new Command\Check();
        $command->setCheck($check);
        $domainCheck = new Command\Domain\Check();
        $domainCheck->setName($names);
        $check->setDomainCheck($domainCheck);
        $this->setCommand($command);
    }
}
