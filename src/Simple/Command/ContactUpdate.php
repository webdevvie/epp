<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Update\ContactUpdateMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage;
use Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Contact\Addr;
use Webdevvie\Epp\Messages\Snippets\Contact\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Contact\Chg;
use Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class ContactUpdate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\ContactInfo';

    public function __construct(
        $id
    ) {
        $command = new CommandMessage();
        $update = new UpdateMessage();
        $command->setUpdate($update);
        $chg = new Chg();
        $contactUpdate = new ContactUpdateMessage();
        $contactUpdate->setId($id);
        $contactUpdate->setChg($chg);
        $update->setContactUpdate($contactUpdate);
        $this->setCommand($command);
    }
}
