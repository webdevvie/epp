<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class ContactInfo extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\ContactInfo';

    /**
     * ContactInfo constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $command = new CommandMessage();
        $info = new InfoMessage();
        $command->setInfo($info);
        $contactInfo = new ContactInfoMessage();
        $contactInfo->setId($id);
        $info->setContactInfo($contactInfo);
        $this->setCommand($command);
    }
}
