<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Host\Addr;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class HostCreate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\HostInfo';

    /**
     * @param string $name
     * @param array  $ipv4
     * @param array  $ipv6
     */
    public function __construct(
        $name,
        array $ipv4 = [],
        array $ipv6 = []
    ) {
        $command = new CommandMessage();
        $create = new CreateMessage();
        $command->setCreate($create);
        $hostCreate = new HostCreateMessage();
        $hostCreate->setName($name);
        $addrs = [];
        foreach ($ipv4 as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v4');
            $addrs[] = $addr;
        }
        foreach ($ipv6 as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v6');
            $addrs[] = $addr;
        }
        $hostCreate->setAddr($addrs);
        $create->setHostCreate($hostCreate);
        $this->setCommand($command);
    }
}
