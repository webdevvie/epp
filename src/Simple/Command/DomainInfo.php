<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainInfoName;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainInfo extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainInfo';

    /**
     * DomainInfo constructor.
     * @param string $name
     * @param string $hosts
     */
    public function __construct($name, $hosts = DomainInfoName::HOSTS_ALL)
    {
        $command = new CommandMessage();
        $info = new InfoMessage();
        $command->setInfo($info);
        $domainInfo = new DomainInfoMessage();
        $nm = new DomainInfoName();
        $nm->setName($name);
        $nm->setHosts($hosts);
        $domainInfo->setName($nm);
        $info->setDomainInfo($domainInfo);
        $this->setCommand($command);
    }
}
