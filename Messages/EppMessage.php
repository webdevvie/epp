<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\XmlElement;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:host-1.0", prefix="host")
 * @XmlRoot("epp")
 */
class EppMessage
{
    /**
     * @var Greeting
     * @Type("Webdevvie\Epp\Messages\Greeting")
     * @SerializedName("greeting")
     * @Expose
     */
    protected $greeting;
    /**
     * @var Hello
     * @Type("Webdevvie\Epp\Messages\Hello")
     * @SerializedName("hello")
     * @Expose
     */
    protected $hello;

    /**
     * @var Command
     * @Type("Webdevvie\Epp\Messages\Command")
     * @SerializedName("command")
     * @Expose
     */
    protected $command;

    /**
     * @var Response
     * @Type("Webdevvie\Epp\Messages\Response")
     * @SerializedName("response")
     * @Expose
     */
    protected $response;

    /**
     * @var string
     */
    protected $rawXml;

    /**
     * @return Hello
     */
    public function getHello()
    {
        return $this->hello;
    }

    /**
     * @param Hello $hello
     * @return EppMessage
     */
    public function setHello(Hello $hello)
    {
        $this->hello = $hello;
        return $this;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param Response $response
     * @return EppMessage
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * @return Greeting
     */
    public function getGreeting()
    {
        return $this->greeting;
    }

    /**
     * @param Greeting $greeting
     * @return EppMessage
     */
    public function setGreeting(Greeting $greeting)
    {
        $this->greeting = $greeting;
        return $this;
    }

    /**
     * @return Command
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param Command $command
     * @return EppMessage
     */
    public function setCommand(Command $command)
    {
        $this->command = $command;
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
}
