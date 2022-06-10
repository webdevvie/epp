<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerInfo;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class SidnResellerInfo extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Messages\EppMessage';

    /**
     * ContactInfo constructor.
     * @param string $id
     */
    public function __construct($id)
    {
        $command = new CommandMessage();
        $info = new InfoMessage();
        $command->setInfo($info);
        $contactInfo = new ResellerInfo();
        $contactInfo->setId($id);
        $info->setSidnResellerInfo($contactInfo);
        $this->setCommand($command);
    }
}
