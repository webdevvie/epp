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
        echo "\nSleeping";
        sleep(3);
        echo "\nSending hello";
        //sending hello
        if ($connection->hello()) {
            //a keepalive!
            echo "\nGot a greeting response";
        }
        echo "\nLogging out";
        $connection->logout();
        $connection->disconnect();
    } else {
        echo "\nNot logged in";
        $connection->disconnect();
    }
} else {
    echo "\nNot connected";
}



