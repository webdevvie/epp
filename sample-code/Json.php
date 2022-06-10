<?php
include(__DIR__ . "/../vendor/autoload.php");

$eppSerializer = new \Webdevvie\Epp\EppSerializer();

$info = new Webdevvie\Epp\Simple\Command\DomainInfo("example.com");
$json = $eppSerializer->serialize($info);

echo "\n$json\n";


$infoOut = $eppSerializer->deserialize($json);

print_r($infoOut);
