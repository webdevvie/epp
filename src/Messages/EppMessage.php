<?php
namespace Webdevvie\Epp\Messages;

use Webdevvie\Epp\EppMessageInterface;
use Webdevvie\Epp\Messages\Command\ExtensionMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\CommandMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\XmlElement;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Command\Check
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:secDNS-1.1", prefix="secDNS")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:rgp-1.0", prefix="rgp")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ssl-1.0", prefix="ssl")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/ext-1.0", prefix="ext")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-1.0", prefix="command-ext")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-contact-1.0", prefix="command-ext-contact")
 * @ExclusionPolicy("all")
 * @XmlRoot("epp")
 */
class EppMessage extends AbstractEppMessage implements EppMessageInterface
{
    /**
     * @return string
     */
    public function getMessageHandler()
    {
        return $this->messageHandler;
    }
    /**
     * @return string
     */
    public function getRalMessageHandler()
    {
        return $this->ralMessageHandler;
    }
    /**
     * @param string $messageHandler
     * @return void
     */
    public function setMessageHandler($messageHandler)
    {
        $this->messageHandler = $messageHandler;
    }
    /**
     * @param string $messageHandler
     * @return void
     */
    public function setRalMessageHandler($messageHandler)
    {
        $this->ralMessageHandler = $messageHandler;
    }

    /**
     * @var string
     */
    protected $messageHandler;
    /**
     * @var string
     */
    protected $ralMessageHandler;
    /**
     * @var GreetingMessage
     * @Type("Webdevvie\Epp\Messages\GreetingMessage")
     * @SerializedName("greeting")
     *
     * @Expose
     */
    protected $greeting;
    /**
     * @var HelloMessage
     * @Type("Webdevvie\Epp\Messages\HelloMessage")
     * @SerializedName("hello")
     *
     * @Expose
     */
    protected $hello;
    /**
     * @var CommandMessage
     * @Type("Webdevvie\Epp\Messages\CommandMessage")
     * @SerializedName("command")
     *
     * @Expose
     */
    protected $command;

    /**
     * @var ResponseMessage
     * @Type("Webdevvie\Epp\Messages\ResponseMessage")
     * @SerializedName("response")
     *
     * @Expose
     */
    protected $response;


    /**
     * @param HelloMessage $hello
     * @return EppMessage
     */
    public function setHello(HelloMessage $hello): EppMessage
    {
        $this->hello = $hello;
        return $this;
    }


    /**
     * @return ResponseMessage
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param ResponseMessage $response
     * @return EppMessage
     */
    public function setResponse(ResponseMessage $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return CommandMessage
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param CommandMessage $command
     * @return EppMessage
     */
    public function setCommand(CommandMessage $command)
    {
        $this->command = $command;
        return $this;
    }

    /**
     * @return RootExtensionMessage
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param RootExtensionMessage $extension
     * @return EppMessage
     */
    public function setExtension(RootExtensionMessage $extension)
    {
        $this->extension = $extension;
        return $this;
    }
    /**
     * @return string
     */
    public function getRawXml()
    {
        return $this->rawXml;
    }

    /**
     * @param string $rawXml
     * @return EppMessage
     */
    public function setRawXml($rawXml)
    {
        $this->rawXml = $rawXml;
        return $this;
    }

    /**
     * @return GreetingMessage
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * @param GreetingMessage $greeting
     * @return EppMessage
     */
    public function setGreeting($greeting)
    {
        $this->greeting = $greeting;
        return $this;
    }
}
