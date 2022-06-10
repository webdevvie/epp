<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerUpdate;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class SidnResellerUpdate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Messages\EppMessage';

    /**
     * @param string $id
     */
    public function __construct(
        $id
    ) {
        $command = new CommandMessage();
        $update = new UpdateMessage();
        $command->setUpdate($update);
        $resellerUpdate = new ResellerUpdate();
        $resellerUpdate->setId($id);

        $update->setSidnResellerUpdate($resellerUpdate);
        $this->setCommand($command);
    }
}
