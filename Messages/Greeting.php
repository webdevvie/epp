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
use Webdevvie\Epp\Messages\Fragment\SvcMenu;

/**
 * @ExclusionPolicy("all")
 */
class Greeting
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("svID")
     * @Expose
     */
    protected $svID;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("svDate")
     * @Expose
     */
    protected $svDate;

    /**
     * @var SvcMenu
     * @Type("Webdevvie\Epp\Messages\Fragment\SvcMenu")
     * @SerializedName("svcMenu")
     * @Expose
     */
    protected $svcMenu;

    /**
     * @return string
     */
    public function getSvID()
    {
        return $this->svID;
    }

    /**
     * @param string $svID
     * @return Greeting
     */
    public function setSvID($svID)
    {
        $this->svID = $svID;
        return $this;
    }

    /**
     * @return string
     */
    public function getSvDate()
    {
        return $this->svDate;
    }

    /**
     * @param string $svDate
     * @return Greeting
     */
    public function setSvDate($svDate)
    {
        $this->svDate = $svDate;
        return $this;
    }

    /**
     * @return SvcMenu
     */
    public function getSvcMenu()
    {
        return $this->svcMenu;
    }

    /**
     * @param SvcMenu $svcMenu
     * @return Greeting
     */
    public function setSvcMenu(SvcMenu $svcMenu)
    {
        $this->svcMenu = $svcMenu;
        return $this;
    }
}
