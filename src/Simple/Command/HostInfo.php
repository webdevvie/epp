<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Info\HostInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class HostInfo
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class HostInfo extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\HostInfo';

    /**
     * HostInfo constructor.
     * @param string $hostname
     */
    public function __construct($hostname)
    {
        $command = new CommandMessage();
        $info = new InfoMessage();
        $command->setInfo($info);
        $hostInfo = new HostInfoMessage();
        $hostInfo->setName($hostname);
        $info->setHostInfo($hostInfo);
        $this->setCommand($command);
    }
}
