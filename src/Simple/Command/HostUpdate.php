<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\HostCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\Command\Update\HostUpdateMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Host\Add;
use Webdevvie\Epp\Messages\Snippets\Host\Addr;
use Webdevvie\Epp\Messages\Snippets\Host\Chg;
use Webdevvie\Epp\Messages\Snippets\Host\Rem;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class HostUpdate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\HostInfo';

    public function __construct(
        $name,
        array $ipv4Add = [],
        array $ipv6Add = [],
        array $ipv4Rem = [],
        array $ipv6Rem = [],
        $newName = false
    ) {
        $command = new CommandMessage();
        $update = new UpdateMessage();
        $command->setUpdate($update);
        $hostUpdate = new HostUpdateMessage();
        $hostUpdate->setName($name);

        $add = new Add();
        $rem = new Rem();
        $addrsAdd = [];
        $addrsRem= [];
        foreach ($ipv4Add as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v4');
            $addrsAdd[] = $addr;
        }
        foreach ($ipv6Add as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v6');
            $addrsAdd[] = $addr;
        }
        foreach ($ipv4Rem as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v4');
            $addrsRem[] = $addr;
        }
        foreach ($ipv6Rem as $ip) {
            $addr = new Addr();
            $addr->setIpAddress($ip);
            $addr->setIp('v6');
            $addrsRem[] = $addr;
        }
        if(count($addrsAdd)>0)
        {
            $add->setAddr($addrsAdd);
            $hostUpdate->setAdd($add);
        }
        if(count($addrsRem)>0)
        {
            $rem->setAddr($addrsRem);
            $hostUpdate->setRem($rem);
        }
        if(is_string($newName))
        {
            $chg = new Chg();
            $chg->setName($newName);
            $hostUpdate->setChg($chg);
        }

        $update->setHostUpdate($hostUpdate);
        $this->setCommand($command);
    }
}
