<?php

namespace Webdevvie\Epp;

use Webdevvie\Epp\Exception\ConnectionException;
use Webdevvie\Epp\Exception\DeserializationException;
use Webdevvie\Epp\Exception\LoginException;
use Webdevvie\Epp\Exception\SerializationException;
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
     * @return void
     * @throws LoginException
     * @throws ConnectionException
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
     * @param EppMessageInterface $eppMessage
     * @param integer             $timeout
     * @return null|EppMessage
     * @throws ConnectionException
     */
    public function sendCommand(EppMessageInterface $eppMessage, $timeout = 60);

    /**
     * @param string      $xml
     * @param string|null $responseClass
     * @return EppMessageInterface
     * @throws DeserializationException
     */
    public function deserializeMessage($xml, $responseClass = null);

    /**
     * @param EppMessageInterface $eppMessage
     * @return string
     * @throws SerializationException
     */
    public function serializeMessage(EppMessageInterface $eppMessage);
}
