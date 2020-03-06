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
        $check = new \Webdevvie\Epp\Messages\Command\CheckMessage();
        $domaincheck = new \Webdevvie\Epp\Messages\Command\Check\DomainCheckMessage();
        $domaincheck->setNames(['test12345.nl']);
        $check->setDomainCheck($domaincheck);
        $command->setCheck($check);
        $eppMessage->setCommand($command);
        //wait up to 60 seconds for the domaincheck to be performed
        $response = $connection->sendCommand($eppMessage, 60);
        $nestis = new \Webdevvie\Nestis\Nestis();
        $code = $nestis->getNestedItem('response/result/code', $response, 1000);
        $msg = $nestis->getNestedItem('response/result/msg', $response, '');
        if ($response->getResponse()->getResult()->getCode() != '1000') {
            echo "\n$msg\n";
        } else {


            $checkResponses = $nestis->getNestedItem('response/resData/chkData/domainCd', $response, []);
            foreach ($checkResponses as $checkResponse) {
                /**
                 * @var \Webdevvie\Epp\Messages\ResData\ChkData\DomainCD $checkResponse
                 */
                echo "\n" . $checkResponse->getDomainName()->getName() . ($checkResponse->getDomainName()->isAvailable() ? ' Available' : ' Unavailable');
                if (!$checkResponse->getDomainName()->isAvailable()) {
                    $reason = $checkResponse->getReason();
                    if (!is_null($reason)) {
                        echo "\n\t Reason:" . $reason->getReason();
                    }
                }
            }
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