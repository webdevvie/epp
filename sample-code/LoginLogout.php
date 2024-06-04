<?php
include(__DIR__ . "/../vendor/autoload.php");
include("config.php");

$connection = new \Webdevvie\Epp\EppConnection($address, $port, $username, $password);

$connection->setDebugger(function($input){echo $input;});
$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
if ($connection->connect()) {
    echo "\nConnected";
    $loggedIn = $connection->login();
    if ($loggedIn) {
        echo "\nLogged in";
        echo "\nLogging out";
        $connection->logout();
    } else {
        echo "\nNot logged in";
        $connection->disconnect();
    }
} else {
    echo "\nNot connected";
}



