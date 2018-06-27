<?php

include(__DIR__."/../vendor/autoload.php");
include("config.php");


$connection  = new \Webdevvie\Epp\EppConnection($address,$port,$username,$password);

$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
$command = new \Webdevvie\Epp\Messages\Command();
$check = new \Webdevvie\Epp\Messages\Command\Check();
$domaincheck = new \Webdevvie\Epp\Messages\Command\Domain\Check();
$domaincheck->setName(['test12345.frl']);
$check->setDomainCheck($domaincheck);
$command->setCheck($check);
$eppMessage->setCommand($command);


echo $connection->serializeMessage($eppMessage);
