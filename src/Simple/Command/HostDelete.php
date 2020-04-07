<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\Command\Delete\HostDeleteMessage;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Host\Addr;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class HostDelete
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class HostDelete extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\HostInfo';

    public function __construct(
        $name
    ) {
        $command = new CommandMessage();
        $delete = new DeleteMessage();
        $command->setDelete($delete);
        $hostDelete = new HostDeleteMessage();
        $hostDelete->setName($name);
        $delete->setHostDelete($hostDelete);
        $this->setCommand($command);
    }
}
