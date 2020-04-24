<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage;
use Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerDelete;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress;
use Webdevvie\Epp\Messages\Snippets\Contact\Addr;
use Webdevvie\Epp\Messages\Snippets\Contact\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;
use Webdevvie\Epp\Simple\SimpleEppCommand;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerCreate;

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
