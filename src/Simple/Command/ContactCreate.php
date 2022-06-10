<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\ContactCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Contact\Addr;
use Webdevvie\Epp\Messages\Snippets\Contact\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Contact\PostalInfo;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class ContactCreate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\ContactInfo';

    /**
     * @param string $id
     * @param string $name
     * @param string $email
     * @param array  $address
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param string $voice
     * @param string $organization
     * @param string $state
     * @param string $fax
     * @param string $authPw
     */
    public function __construct(
        $id,
        $name,
        $email,
        array $address,
        $postalCode,
        $city,
        $countryCode,
        $voice,
        $organization = null,
        $state = null,
        $fax = null,
        $authPw = ''
    ) {
        $command = new CommandMessage();
        $create = new CreateMessage();
        $command->setCreate($create);
        $contactInfo = new ContactCreateMessage();
        $contactInfo->setId($id);
        $addr = new Addr();
        $addr->setStreet($address);
        $addr->setCity($city);
        $addr->setPc($postalCode);
        $addr->setCc($countryCode);
        $addr->setSp($state);
        $pi = new PostalInfo();
        $pi->setName($name)
            ->setOrg($organization)
            ->setAddr($addr);
        $contactInfo->setEmail($email);
        $contactInfo->setVoice($voice);
        if (!empty($fax)) {
            $contactInfo->setFax($fax);
        }

        $contactInfo->setPostalInfo($pi);
        if ($authPw != '') {
            $authInfo = new AuthInfo();
            $authInfo->setPw($authPw);
            $contactInfo->setAuthInfo($authInfo);
        }
        $create->setContactCreate($contactInfo);
        $this->setCommand($command);
    }
}
