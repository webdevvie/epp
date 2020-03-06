<?php
include(__DIR__ . "/../vendor/autoload.php");
include("config.php");
$connection = new \Webdevvie\Epp\EppConnection($address, $port, $username, $password);
//$connection->setDebugger(function($input){echo $input;});
$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
if ($connection->connect()) {
    echo "\nConnected";
    $loggedIn = $connection->login();
    if ($loggedIn) {
        echo "\nLogged in";
        $eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
        $command = new \Webdevvie\Epp\Messages\CommandMessage();
        $info = new \Webdevvie\Epp\Messages\Command\InfoMessage();
        $domainInfo = new \Webdevvie\Epp\Messages\Command\Info\DomainInfoMessage();
        $domainInfo->setName('zerg-transfer-2019-10-07-03.cw');
        $info->setDomainInfo($domainInfo);
        $command->setInfo($info);
        $eppMessage->setCommand($command);
        //wait up to 60 seconds for the domaincheck to be performed
        $response = $connection->sendCommand($eppMessage, 60);
        print_r($response);


        echo "\nLogging out";
        $connection->logout();
    } else {
        echo "\nNot logged in";
        $connection->disconnect();
    }
} else {
    echo "\nNot connected";
}