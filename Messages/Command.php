<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\Check;
use Webdevvie\Epp\Messages\Command\Login;
use Webdevvie\Epp\Messages\Command\Logout;

/**
 * Class Command
 * @ExclusionPolicy("all")
 */
class Command
{
    /**
     * @var Check
     * @Type("Webdevvie\Epp\Messages\Command\Check")
     * @SerializedName("check")
     *
     * @Expose
     */
    protected $check;

//
//    /**
//     * @var Create
//     * @Type("Webdevvie\Epp\Messages\Command\Creat")
//     * @SerializedName("create")
//     *
//     * @Expose
//     */
//    protected $create;
//
//    /**
//     * @var Info
//     * @Type("Webdevvie\Epp\Messages\Command\Info")
//     * @SerializedName("info")
//     *
//     * @Expose
//     */
//    protected $info;
//
//    /**
//     * @var Delete
//     * @Type("Webdevvie\Epp\Messages\Command\Delete")
//     * @SerializedName("delete")
//     *
//     * @Expose
//     */
//    protected $delete;
//
//    /**
//     * @var Transfer
//     * @Type("Webdevvie\Epp\Messages\Command\Transfer")
//     * @SerializedName("transfer")
//     *
//     * @Expose
//     */
//    protected $transfer;
//
//    /**
//     * @var Update
//     * @Type("Webdevvie\Epp\Messages\Command\Update")
//     * @SerializedName("update")
//     *
//     * @Expose
//     */
//    protected $update;
//
//    /**
//     * @var Renew
//     * @Type("Webdevvie\Epp\Messages\Command\Renew")
//     * @SerializedName("renew")
//     *
//     * @Expose
//     */
//    protected $renew;
//
    /**
     * @var Login
     * @Type("Webdevvie\Epp\Messages\Command\Login")
     * @SerializedName("login")
     *
     * @Expose
     */
    protected $login;

    /**
     * @var Logout
     * @Type("Webdevvie\Epp\Messages\Command\Logout")
     * @SerializedName("logout")
     *
     * @Expose
     */
    protected $logout;

//    /**
//     * @var Poll
//     * @Type("Webdevvie\Epp\Messages\Command\Poll")
//     * @SerializedName("poll")
//     *
//     * @Expose
//     */
//    protected $poll;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("clTRID")
     *
     * @Expose
     */
    protected $clTRID;

//
//    /**
//     * @var Extension
//     * @Type("Webdevvie\Epp\Messages\Command\Extension")
//     * @SerializedName("extension")
//     *
//     * @Expose
//     */
//    protected $extension;
//
    /**
     * @return Login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param Login $login
     * @return Command
     */
    public function setLogin(Login $login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return Logout
     */
    public function getLogout()
    {
        return $this->logout;
    }

    /**
     * @param Logout $logout
     * @return Command
     */
    public function setLogout(Logout $logout)
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
     * @return Command
     */
    public function setClTRID($clTRID)
    {
        $this->clTRID = $clTRID;
        return $this;
    }

    /**
     * @return Check
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * @param Check $check
     * @return Command
     */
    public function setCheck(Check $check)
    {
        $this->check = $check;
        return $this;
    }
}
