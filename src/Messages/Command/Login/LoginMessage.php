<?php
namespace Webdevvie\Epp\Messages\Command\Login;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\XmlDeserializationVisitor;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlList;

/**
 * Class LoginMessage
 *
 * @package Webdevvie\Epp\Messages\Command\Login
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class LoginMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("clID")
     *
     * @Expose
     */
    protected $clID;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("pw")
     *
     * @Expose
     */
    protected $pw;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("newPW")
     *
     * @Expose
     */
    protected $newPW;

    /**
     * @var Options[]
     * @Type("Webdevvie\Epp\Messages\Command\Login\Options")
     * @Expose
     */
    protected $options;

    /**
     * @var Svcs
     * @Type("Webdevvie\Epp\Messages\Command\Login\Svcs")
     * @SerializedName("svcs")
     *
     * @Expose
     */
    protected $svcs;

    /**
     * @var string
     */
    protected $messageHandler = 'epp.handler.login::login';

    /**
     * @return string
     */
    public function getClID()
    {
        return $this->clID;
    }

    /**
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return Svcs
     */
    public function getSvcs()
    {
        return $this->svcs;
    }

    /**
     * @return string
     */
    public function getNewPW()
    {
        return $this->newPW;
    }

    /**
     * @param string $clID
     * @return LoginMessage
     */
    public function setClID($clID)
    {
        $this->clID = $clID;
        return $this;
    }

    /**
     * @param string $pw
     * @return LoginMessage
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
        return $this;
    }

    /**
     * @param string $newPW
     * @return LoginMessage
     */
    public function setNewPW($newPW)
    {
        $this->newPW = $newPW;
        return $this;
    }

    /**
     * @param Options[] $options
     * @return LoginMessage
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param Svcs $svcs
     * @return LoginMessage
     */
    public function setSvcs($svcs)
    {
        $this->svcs = $svcs;
        return $this;
    }

    /**
     * @param string $messageHandler
     * @return LoginMessage
     */
    public function setMessageHandler($messageHandler)
    {
        $this->messageHandler = $messageHandler;
        return $this;
    }
}
