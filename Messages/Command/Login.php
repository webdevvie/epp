<?php

namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Fragment\Options;
use Webdevvie\Epp\Messages\Fragment\Svcs;

/**
 * Class Login
 * @ExclusionPolicy("all")
 */
class Login
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
     * @var Options
     * @Type("Webdevvie\Epp\Messages\Fragment\Options")
     * @SerializedName("options")
     *
     * @Expose
     */
    protected $options;

    /**
     * @var Svcs
     * @Type("Webdevvie\Epp\Messages\Fragment\Svcs")
     * @SerializedName("svcs")
     *
     * @Expose
     */
    protected $svcs;

    /**
     * @return string
     */
    public function getClID()
    {
        return $this->clID;
    }

    /**
     * @param string $clID
     * @return Login
     */
    public function setClID($clID)
    {
        $this->clID = $clID;
        return $this;
    }

    /**
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param string $pw
     * @return Login
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewPW()
    {
        return $this->newPW;
    }

    /**
     * @param string $newPW
     * @return Login
     */
    public function setNewPW($newPW)
    {
        $this->newPW = $newPW;
        return $this;
    }

    /**
     * @return Options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param Options $options
     * @return Login
     */
    public function setOptions(Options $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return Svcs
     */
    public function getSvcs()
    {
        return $this->svcs;
    }

    /**
     * @param Svcs $svcs
     * @return Login
     */
    public function setSvcs(Svcs $svcs)
    {
        $this->svcs = $svcs;
        return $this;
    }
}
