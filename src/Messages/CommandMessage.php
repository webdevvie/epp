<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\ExtensionMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\Logout\LogoutMessage;
use Webdevvie\Epp\Messages\Command\PollMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class CommandMessage extends AbstractEppMessage
{
    /**
     * @var CheckMessage
     * @Type("Webdevvie\Epp\Messages\Command\CheckMessage")
     * @SerializedName("check")
     *
     * @Expose
     */
    protected $check;

    /**
     * @var CreateMessage
     * @Type("Webdevvie\Epp\Messages\Command\CreateMessage")
     * @SerializedName("create")
     *
     * @Expose
     */
    protected $create;

    /**
     * @var InfoMessage
     * @Type("Webdevvie\Epp\Messages\Command\InfoMessage")
     * @SerializedName("info")
     *
     * @Expose
     */
    protected $info;

    /**
     * @var DeleteMessage
     * @Type("Webdevvie\Epp\Messages\Command\DeleteMessage")
     * @SerializedName("delete")
     *
     * @Expose
     */
    protected $delete;

    /**
     * @var TransferMessage
     * @Type("Webdevvie\Epp\Messages\Command\TransferMessage")
     * @SerializedName("transfer")
     *
     * @Expose
     */
    protected $transfer;

    /**
     * @var UpdateMessage
     * @Type("Webdevvie\Epp\Messages\Command\UpdateMessage")
     * @SerializedName("update")
     *
     * @Expose
     */
    protected $update;

    /**
     * @var RenewMessage
     * @Type("Webdevvie\Epp\Messages\Command\RenewMessage")
     * @SerializedName("renew")
     *
     * @Expose
     */
    protected $renew;

    /**
     * @var LoginMessage
     * @Type("Webdevvie\Epp\Messages\Command\Login\LoginMessage")
     * @SerializedName("login")
     *
     * @Expose
     */
    protected $login;

    /**
     * @var LogoutMessage
     * @Type("Webdevvie\Epp\Messages\Command\Logout\LogoutMessage")
     * @SerializedName("logout")
     *
     * @Expose
     */
    protected $logout;

    /**
     * @var PollMessage
     * @Type("Webdevvie\Epp\Messages\Command\PollMessage")
     * @SerializedName("poll")
     *
     * @Expose
     */
    protected $poll;

    /**
     * @var ExtensionMessage
     * @Type("Webdevvie\Epp\Messages\Command\ExtensionMessage")
     * @SerializedName("extension")
     *
     * @Expose
     */
    protected $extension;

    /**
     * @var string
     * @Type("string")
     * @Serializer\XmlElement(cdata=false)
     * @SerializedName("clTRID")
     *
     * @Expose
     */
    protected $clTRID;

    /**
     * @return LoginMessage
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return CheckMessage
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * @return LoginMessage
     */
    public function getLogout()
    {
        return $this->logout;
    }

    /**
     * @return CreateMessage
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @param CheckMessage $check
     * @return CommandMessage
     */
    public function setCheck(CheckMessage $check)
    {
        $this->check = $check;
        return $this;
    }

    /**
     * @param CreateMessage $create
     * @return CommandMessage
     */
    public function setCreate(CreateMessage $create)
    {
        $this->create = $create;
        return $this;
    }

    /**
     * @param LoginMessage $login
     * @return CommandMessage
     */
    public function setLogin(LoginMessage $login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @param LogoutMessage $logout
     * @return CommandMessage
     */
    public function setLogout(LogoutMessage $logout)
    {
        $this->logout = $logout;
        return $this;
    }

    /**
     * @return string
     */
    public function getClTRID()
    {
        return $this->clTRID;
    }

    /**
     * @param string $clTRID
     * @return CommandMessage
     */
    public function setClTRID($clTRID)
    {
        $this->clTRID = $clTRID;
        return $this;
    }

    /**
     * @return InfoMessage
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param InfoMessage $info
     * @return CommandMessage
     */
    public function setInfo(InfoMessage $info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return DeleteMessage
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * @param DeleteMessage $delete
     * @return CommandMessage
     */
    public function setDelete(DeleteMessage $delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * @return TransferMessage
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * @param TransferMessage $transfer
     * @return CommandMessage
     */
    public function setTransfer(TransferMessage $transfer)
    {
        $this->transfer = $transfer;
        return $this;
    }

    /**
     * @return UpdateMessage
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param UpdateMessage $update
     * @return CommandMessage
     */
    public function setUpdate(UpdateMessage $update)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @return RenewMessage
     */
    public function getRenew()
    {
        return $this->renew;
    }

    /**
     * @param RenewMessage $renew
     * @return CommandMessage
     */
    public function setRenew(RenewMessage $renew)
    {
        $this->renew = $renew;
        return $this;
    }

    /**
     * @return ExtensionMessage
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param ExtensionMessage $extension
     * @return CommandMessage
     */
    public function setExtension(ExtensionMessage $extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return PollMessage
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * @param PollMessage $poll
     * @return CommandMessage
     */
    public function setPoll(PollMessage $poll)
    {
        $this->poll = $poll;
        return $this;
    }
}
