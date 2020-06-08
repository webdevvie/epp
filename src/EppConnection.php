<?php

namespace Webdevvie\Epp;

use Webdevvie\Epp\Exception\ConnectionException;
use Webdevvie\Epp\Exception\LoginException;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\Login\Options;
use Webdevvie\Epp\Messages\Command\Login\SvcExtension;
use Webdevvie\Epp\Messages\Command\Login\Svcs;
use Webdevvie\Epp\Messages\Command\Logout\LogoutMessage;
use Webdevvie\Epp\Messages\CommandMessage;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Epp\Messages\GreetingMessage;
use Webdevvie\Epp\Messages\HelloMessage;
use Webdevvie\Epp\Simple\SimpleEppCommand;
use Webdevvie\Epp\Simple\SimpleEppResponse;

/**
 * Class EppConnection
 * @package Webdevvie\Epp
 */
class EppConnection extends AbstractConnection
{
    /**
     * @var string
     */
    protected $serverAddress;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $lang = 'en';

    /**
     * @var string
     */
    protected $port;

    /**
     * @var RawEppConnection
     */
    protected $connection;

    /**
     * @var boolean
     */
    protected $connected = false;

    /**
     * @var integer
     */
    protected $timeout = 10;

    /**
     * @var string
     */
    protected $version = '1.0';

    /**
     * @var string
     */
    protected $hello = '';

    /**
     * @var EppMessage
     */
    protected $welcomeMessage;

    /**
     * @var boolean
     */
    protected $waitingForMessage = true;

    /**
     * @var null|string
     */
    protected $expectedClTRID = null;

    /**
     * @var boolean
     */
    protected $loggedIn = false;

    /**
     * @var boolean
     */
    protected $mimicServerGreeting = true;

    /**
     * @var boolean|callable
     */
    protected $debugger = false;

    /**
     * @var boolean|callable
     */
    protected $logger = false;

    /**
     * @var string[]
     */
    protected $objURI = [
        "urn:ietf:params:xml:ns:domain-1.0",
        "urn:ietf:params:xml:ns:contact-1.0",
        "urn:ietf:params:xml:ns:host-1.0"
    ];

    /**
     * @var string[]
     */
    protected $extURI = [
        "urn:ietf:params:xml:ns:secDNS-1.1",
        "urn:ietf:params:xml:ns:rgp-1.0"
    ];

    /**
     * EppConnection constructor.
     * @param string  $serverAddress
     * @param integer $port
     * @param string  $username
     * @param string  $password
     * @param string  $lang
     */
    public function __construct($serverAddress, $port, $username, $password, $lang = 'en')
    {
        $this->username = $username;
        $this->password = $password;
        $this->lang = $lang;
        $this->port = $port;
        $this->serverAddress = $serverAddress;
        $this->connection = new RawEppConnection($serverAddress, $port, $this->timeout);
        parent::__construct();
    }

    /**
     * @param boolean $mimicServerGreeting
     * @return void
     */
    public function setmimicServerGreeting($mimicServerGreeting)
    {
        $this->mimicServerGreeting = $mimicServerGreeting;
    }

    /**
     * @param boolean|callable $debugger
     * @return EppConnection
     */
    public function setDebugger($debugger)
    {
        $this->debugger = $debugger;
        return $this;
    }

    /**
     * @return boolean|callable
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param boolean|callable $logger
     * @return EppConnection
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
        return $this;
    }

    /**
     * @return EppMessage
     */
    public function getWelcomeMessage()
    {
        return $this->welcomeMessage;
    }

    /**
     * @param string $msg
     * @return void
     */
    public function debug($msg)
    {
        if (is_callable($this->debugger)) {
            $debugger = $this->debugger;
            $debugger($msg);
        }
    }

    /**
     * @param string $msg
     * @return void
     */
    public function log($msg)
    {
        if (is_callable($this->logger)) {
            $debugger = $this->logger;
            $debugger($msg);
        }
    }

    /**
     * @param RawEppConnection|mixed $connection
     * @return void
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param integer $timeout
     * @return boolean
     * @throws ConnectionException
     */
    public function connect($timeout = 60)
    {
        $this->connection->connectToServer($timeout);
        if ($this->isConnected()) { //read the welcome message
            $welcomeXml = $this->connection->read();
            $this->debug("Welcome xml:" . $welcomeXml);
            $this->hello = $welcomeXml;
            if ($welcomeXml !== false) {
                $this->welcomeMessage = $this->deserializeMessage($welcomeXml, null);
                if (!is_null($this->welcomeMessage)) {
                    return true;
                }
            }
            $this->disconnect();
        }
        return false;
    }

    /**
     * @return boolean
     * @throws ConnectionException
     */
    public function hello()
    {
        if (!$this->isConnected()) {
            throw new ConnectionException("cannot send hello when not connected", 1);
        }
        $eppMessage = new EppMessage();
        $hello = new HelloMessage();
        $eppMessage->setHello($hello);
        $response = $this->writeAndWaitForResponse($eppMessage);
        $greeting = $this->nestis->getNestedItem('greeting', $response);
        if (!($greeting instanceof GreetingMessage)) {
            throw new ConnectionException("No greeting as a response to hello", 1);
        }
        return true;
    }

    /**
     * @return boolean
     * @throws ConnectionException
     * @throws LoginException
     */
    public function logout()
    {
        if (!$this->isConnected()) {
            throw new ConnectionException("cannot logout when not connected", 1);
        }
        if (!$this->loggedIn) {
            throw new LoginException("cannot logout when not logged in", 1);
        }
        $logout = new LogoutMessage();
        $eppMessage = new EppMessage();
        $command = new CommandMessage();
        $command->setLogout($logout);
        $eppMessage->setCommand($command);
        $response = $this->writeAndWaitForResponse($eppMessage);
        $resultCode = $this->nestis->getNestedItem('response/result/code', $response);
        $this->debug($resultCode);
        if ($resultCode == 1500) {
            //logout successful
            $this->loggedIn = false;
            return true;
        } else {
            $resultMsg = $this->nestis->getNestedItem('response/result/msg', $response);
            throw new LoginException($resultMsg, $resultCode);
        }
    }

    /**
     * @return boolean
     * @throws LoginException
     */
    public function login()
    {
        if (!$this->isConnected()) {
            $this->connect();
        }
        $login = new LoginMessage();
        $eppMessage = new EppMessage();
        $command = new CommandMessage();
        $command->setLogin($login);
        $eppMessage->setCommand($command);
        $login->setClID($this->username);
        $login->setPw($this->password);
        $svcs = new Svcs();
        $options = new Options();
        if (!$this->mimicServerGreeting || is_null($this->welcomeMessage)) {
            $options->setLang($this->lang);
            $options->setVersion($this->version);
            if (count($this->extURI) > 0) {
                $ext = new SvcExtension();
                $ext->setExtURI($this->extURI);
                $svcs->setSvcExtension($ext);
            }
            $svcs->setObjURI($this->objURI);
        } else {
            $greeting = $this->welcomeMessage->getGreeting();
            $options->setLang($greeting->getSvcMenu()->getLang());
            $options->setVersion($greeting->getSvcMenu()->getVersion());
            $svcs->setSvcExtension($greeting->getSvcMenu()->getSvcExtension());
            $svcs->setObjURI($greeting->getSvcMenu()->getObjURI());
        }
        $login->setSvcs($svcs);
        $login->setOptions($options);
        $response = $this->writeAndWaitForResponse($eppMessage);
        $resultCode = $this->nestis->getNestedItem('response/result/code', $response);
        if ($resultCode == 1000) {
            //login successful
            $this->loggedIn = true;
            return true;
        } else {
            $resultMsg = $this->nestis->getNestedItem('response/result/msg', $response);
            throw new LoginException($resultMsg, $resultCode);
        }
    }

    /**
     * @param EppMessageInterface $eppMessage
     * @return integer|null bytes written
     * @throws ConnectionException
     */
    public function write(EppMessageInterface $eppMessage)
    {
        if (!is_null($eppMessage->getCommand())) {
            //add the clrTid
            $command = $eppMessage->getCommand();
            if (is_null($command->getClTRID())) {
                $clrTid = $this->generateClTRID();
                $eppMessage->getCommand()->setClTRID($clrTid);
            }
        }
        if (!$this->isConnected()) {
            throw new ConnectionException('Cannot write without being connected', 1);
        }
        $xml = $this->serializeMessage($eppMessage);
        $this->debug("Sending:" . $xml);
        $this->log("OUT: " . $xml);
        return $this->connection->write($xml);
    }

    /**
     * @param EppMessageInterface $eppMessage
     * @param integer             $timeout
     * @return null|EppMessage
     * @throws ConnectionException
     */
    public function sendCommand(EppMessageInterface $eppMessage, $timeout = 60)
    {
        return $this->writeAndWaitForResponse($eppMessage, $timeout);
    }

    /**
     * @param EppMessageInterface $eppMessage
     * @param integer|null        $timeout
     * @return null|EppMessageInterface|SimpleEppResponse
     * @throws ConnectionException
     */
    protected function writeAndWaitForResponse(EppMessageInterface $eppMessage, $timeout = null)
    {
        $responseClass = null;
        if ($eppMessage instanceof SimpleEppCommand) {
            //get the response class
            $responseClass = $eppMessage->getMappedResponse();
        }
        $this->write($eppMessage);
        $xmlResponse = $this->connection->read(false, (is_null($timeout) ? $this->timeout : $timeout));
        if ($xmlResponse === false) {
            //timeout probably
            $this->log("IN: FALSE");
            throw new ConnectionException('Request read error', 2);
        }
        $this->debug($xmlResponse);
        $this->log("IN: " . $xmlResponse);
        $response = $this->deserializeMessage($xmlResponse, $responseClass);
        if (is_object($response) && !is_null($responseClass) && is_callable([$response, 'setNestis'])) {
            $response->setNestis($this->nestis);
        }
        return $response;
    }

    /**
     * @return void
     * @throws LoginException
     * @throws ConnectionException
     */
    public function disconnect()
    {
        parent::disconnect();
        if (is_object($this->connection)) {
            if (!$this->connection->isConnected()) {
                $this->loggedIn = false;
                return;
            }
        } else {
            $this->loggedIn = false;
            return;
        }
        if ($this->loggedIn) {
            //log out first
            $this->logout();
        }
        $this->connection->disconnect();
    }

    /**
     * @return boolean
     */
    public function isConnected()
    {
        if (!is_object($this->connection)) {
            return false;
        }
        return $this->connection->isConnected();
    }
}
