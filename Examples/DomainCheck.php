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
        $eppMessage = new \Webdevvie\Epp\Messages\EppMessage();
        $command = new \Webdevvie\Epp\Messages\Command();
        $check = new \Webdevvie\Epp\Messages\Command\Check();
        $domaincheck = new \Webdevvie\Epp\Messages\Command\Domain\Check();
        $domaincheck->setName(['test12345.frl','test123456.frl','test.com']);
        $check->setDomainCheck($domaincheck);
        $command->setCheck($check);
        $eppMessage->setCommand($command);
        //wait up to 60 seconds for the domaincheck to be performed
        $response = $connection->sendCommand($eppMessage, 60);
        $nestis = new \Webdevvie\Nestis\Nestis();
        $checkResponses = $nestis->getNestedItem('response/resData/domainChkData/cd',$response,[]);
        foreach($checkResponses as $checkResponse)
        {
            /**
             * @var \Webdevvie\Epp\Messages\Response\ResData\Domain\Cd $checkResponse
             */
            echo "\n".$checkResponse->getName()->getName().($checkResponse->getName()->isAvail()?' Available':' Unavailable');
            if(!$checkResponse->getName()->isAvail())
            {
                $reason = $checkResponse->getReason();
                if(!is_null($reason))
                {
                    echo "\n\t Reason:".$reason->getReason();
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