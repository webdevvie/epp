<?php

namespace Webdevvie\Epp;

use Webdevvie\Epp\Exception\ConnectionException;
use Webdevvie\Epp\Exception\LoginException;
use Webdevvie\Epp\Messages\EppMessage;

/**
 * Interface ConnectionInterface
 * @package Webdevvie\Epp
 */
interface ConnectionInterface
{
    /**
     * @param integer $timeout
     * @return boolean|void
     */
    public function connect($timeout = 60);

    /**
     * @throws ConnectionException
     * @throws LoginException
     * @return void
     */
    public function disconnect();

    /**
     * @return boolean
     */
    public function isConnected();

    /**
     * @return boolean
     * @throws ConnectionException
     * @throws LoginException
     */
    public function login();

    /**
     * @return boolean
     * @throws ConnectionException
     * @throws LoginException
     */
    public function logout();

    /**
     * @param EppMessage $eppMessage
     * @param integer    $timeout
     * @return null|EppMessage
     * @throws ConnectionException
     */
    public function sendCommand(EppMessage $eppMessage, $timeout = 60);

    /**
     * @param string      $xml
     * @param string|null $eppMessageClass
     * @return EppMessage|null
     */
    public function deserializeMessage($xml, $eppMessageClass = null);

    /**
     * @param EppMessage $eppMessage
     * @return string
     */
    public function serializeMessage(EppMessage $eppMessage);
}
