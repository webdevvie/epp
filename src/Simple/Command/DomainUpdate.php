<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Update\DomainUpdateMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainUpdateName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainUpdate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainInfo';

    /**
     * DomainUpdate constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $command = new CommandMessage();
        $update = new UpdateMessage();
        $command->setUpdate($update);
        $domainUpdate = new DomainUpdateMessage();
        $domainUpdate->setName($name);
        $update->setDomainUpdate($domainUpdate);
        $this->setCommand($command);
    }
}
