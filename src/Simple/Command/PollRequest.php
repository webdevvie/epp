<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\PollMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class HostInfo
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class PollRequest extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Messages\EppMessage';

    /**
     * HostInfo constructor.
     * @param string $hostname
     */
    public function __construct()
    {
        $command = new CommandMessage();
        $poll = new PollMessage();
        $poll->setOp(PollMessage::OP_REQ);
        $command->setPoll($poll);
        $this->setCommand($command);
    }
}
