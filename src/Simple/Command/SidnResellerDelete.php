<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerDelete;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class SidnResellerDelete extends SimpleEppCommand
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
        $create = new DeleteMessage();
        $command->setDelete($create);
        $resellerCreate = new ResellerDelete();
        $resellerCreate->setId($id);

        $create->setSidnResellerDelete($resellerCreate);
        $this->setCommand($command);
    }
}
