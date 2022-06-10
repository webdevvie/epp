<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\PollMessage;
use Webdevvie\Epp\Messages\CommandMessage;
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
     * constructor
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
