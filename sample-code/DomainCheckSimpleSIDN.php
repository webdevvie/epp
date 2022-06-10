<?php
include(__DIR__ . "/../vendor/autoload.php");
include("config.php");

use Webdevvie\Epp\EppConnection;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Epp\Simple\Command\DomainCheck;

$connection = new EppConnection($address, $port, $username, $password);
$eppMessage = new EppMessage();
if ($connection->connect()) {
    echo "\nConnected";
    $loggedIn = $connection->login();
    if ($loggedIn) {
        echo "\nLogged in";
        $domains = [
            'test.nl',
            'test1234.nl',
            'test12345-' . substr(sha1(uniqid('', true)), 0, 16) . '.nl'
        ];
        $domaincheck = new DomainCheck($domains);
        $response = $connection->sendCommand($domaincheck);
        /**
         * @var \Webdevvie\Epp\Simple\Response\DomainCheck $response
         */
        if ($response->getResponseCode() == 1000) {
            echo "\n\nResults: \n", json_encode($response->getCheckResults(), JSON_PRETTY_PRINT);
        } else {
            echo "\nERROR: " . $response->getResponseMessage() . "\n";
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