<?php

include(__DIR__."/../vendor/autoload.php");
include("config.php");


$connection  = new \Webdevvie\Epp\EppConnection($address,$port,$username,$password);

$eppMessage = new \Webdevvie\Epp\Messages\EppMessage();

$welcomeMessage = $connection->connect();
print_r($welcomeMessage);
