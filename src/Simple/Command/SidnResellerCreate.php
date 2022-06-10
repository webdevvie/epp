<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Extension\Sidn\Command\ResellerCreate;
use Webdevvie\Epp\Messages\Extension\Sidn\Reseller\ResellerAddress;
use Webdevvie\Epp\Simple\SimpleEppCommand;

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

    /**
     * @param string $id
     * @param string $organization
     * @param string $website
     * @param string $email
     * @param array  $address
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param string $voice
     */
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
