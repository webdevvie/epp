<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\Command\Info\ContactInfoMessage;
use Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\CommandMessage;
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
class SidnResellerCreate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Messages\EppMessage';

    public function __construct(
        $id,
        $organization,
        $website,
        $email,
        array $address,
        $postalCode,
        $city,
        $countryCode,
        $voice
    ) {
        $command = new CommandMessage();
        $create = new CreateMessage();
        $command->setCreate($create);
        $resellerCreate = new ResellerCreate();
        $resellerCreate->setId($id);
        $resellerCreate->setUrl($website);
        $resellerCreate->setTradingName($organization);
        $addr = new ResellerAddress();
        $addr->setStreet($address);
        $addr->setCity($city);
        $addr->setPc($postalCode);
        $addr->setCc($countryCode);
        $resellerCreate->setAddress($addr);
        $resellerCreate->setEmail($email);
        $resellerCreate->setVoice($voice);
        $create->setSidnResellerCreate($resellerCreate);
        $this->setCommand($command);
    }
}
