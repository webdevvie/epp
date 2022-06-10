<?php

namespace Webdevvie\Epp\Simple\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\XmlRoot;
use Webdevvie\Epp\Messages\Command\Create\DomainCreateMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainContact;
use Webdevvie\Epp\Messages\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Snippets\Domain\Period;
use Webdevvie\Epp\Simple\SimpleEppCommand;

/**
 * Class DomainCheck
 * @package Webdevvie\Epp\Simple\Command
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class DomainCreate extends SimpleEppCommand
{
    /**
     * @var string
     */
    public $mappedResponse = 'Webdevvie\Epp\Simple\Response\DomainInfo';

    /**
     * @param string  $name
     * @param string  $registrant
     * @param string  $nameservers
     * @param array   $adminContacts
     * @param array   $techContacts
     * @param array   $billingContacts
     * @param integer $period
     * @param string  $authCode
     */
    public function __construct(
        $name,
        $registrant,
        $nameservers = [],
        array $adminContacts = [],
        array $techContacts = [],
        array $billingContacts = [],
        $period = 12,
        $authCode = ''
    ) {
        $command = new CommandMessage();
        $create = new CreateMessage();
        $command->setCreate($create);
        $domainCreate = new DomainCreateMessage();
        $domainCreate->setName($name);
        $domainCreate->setRegistrant($registrant);
        $per = new Period();
        $per->setUnit('m');
        $per->setAmount($period);
        $domainCreate->setPeriod($per);
        $ns = new Ns();
        foreach ($nameservers as $nameserver) {
            $ns->addHostObj($nameserver);
        }
        $domainCreate->setNs($ns);
        $contacts = [];
        foreach ($adminContacts as $adminContact) {
            $contacts[] = new DomainContact($adminContact, DomainContact::ROLE_ADMIN);
        }
        foreach ($techContacts as $techContact) {
            $contacts[] = new DomainContact($techContact, DomainContact::ROLE_TECH);
        }
        foreach ($billingContacts as $billingContact) {
            $contacts[] = new DomainContact($billingContact, DomainContact::ROLE_BILLING);
        }
        if ($authCode != '') {
            $authInfo = new AuthInfo();
            $authInfo->setPw($authCode);
            $domainCreate->setAuthInfo($authInfo);
        }
        $domainCreate->setContacts($contacts);
        $create->setDomainCreate($domainCreate);
        $this->setCommand($command);
    }
}
