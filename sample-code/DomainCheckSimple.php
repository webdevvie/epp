<?php
include(__DIR__ . "/../vendor/autoload.php");
include("config.php");
$connection = new \Webdevvie\Epp\EppConnection($address, $port, $username, $password);
$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
if ($connection->connect()) {
    echo "\nConnected";
    $loggedIn = $connection->login();
    if ($loggedIn) {
        echo "\nLogged in";
        $domaincheck = new \Webdevvie\Epp\Simple\Command\DomainCheck(['test.com', 'test1234.frl', 'test12345.frl']);
        $response = $connection->sendCommand($domaincheck);
        /**
         * @var \Webdevvie\Epp\Simple\Response\DomainCheck $response
         */
        if ($response->getResponseCode() == 1000) {
            echo "\n\nResults: \n", json_encode($response->getCheckResults(),JSON_PRETTY_PRINT);
        }
        else{
            echo "\nERROR: ".$response->getResponseMessage()."\n";
        }

        echo "\nLogging out";
        $connection->logout();
    } else {
        echo "\nNot logged in";
        $connection->disconnect();
    }
} else {
    echo "\nNot connected";
}