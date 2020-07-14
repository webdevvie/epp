<?php
include(__DIR__ . "/../vendor/autoload.php");
include("config.php");
$connection = new \Webdevvie\Epp\EppConnection($address, $port, $username, $password);
$connection->setDebugger(function($input){echo $input;});
$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
if ($connection->connect()) {
    echo "\nConnected";
    $changedPwd = $connection->loginPasswordChange($newPassword);
    if ($changedPwd) {
        echo "\nPassword changed";
    } else {
        echo "\nPassword not changed";

    }
    $connection->disconnect();
} else {
    echo "\nNot connected";
}



