<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Delete\DomainDeleteMessage;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainDeleteName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainDelete extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainInfo';

    /**
     * DomainDelete constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $command = new CommandMessage();
        $delete = new DeleteMessage();
        $command->setDelete($delete);
        $domainDelete = new DomainDeleteMessage();
        $domainDelete->setName($name);
        $delete->setDomainDelete($domainDelete);
        $this->setCommand($command);
    }
}
