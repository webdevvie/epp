<?php

namespace Webdevvie\Epp\Messages;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Snippets\Dcp;
use Webdevvie\Epp\Messages\Snippets\SvcMenu;

/**
 * Class GreetingMessage
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class GreetingMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("svID")
     *
     * @Expose
     */
    protected $svID;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("svDate")
     *
     * @Expose
     */
    protected $svDate;
    /**
     * @var SvcMenu|null
     * @Type("Webdevvie\Epp\Messages\Snippets\SvcMenu")
     * @SerializedName("svcMenu")
     *
     * @Expose
     */
    protected $svcMenu;
    /**
     * @var Dcp|null
     * @Type("Webdevvie\Epp\Messages\Snippets\Dcp")
     * @SerializedName("dcp")
     *
     * @Expose
     */
    protected $dpc;

    /**
     * @return string
     */
    public function getSvID()
    {
        return $this->svID;
    }

    /**
     * @param string $svID
     * @return GreetingMessage
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
     * @return GreetingMessage
     */
    public function setSvDate($svDate)
    {
        $this->svDate = $svDate;
        return $this;
    }

    /**
     * @return SvcMenu|null
     */
    public function getSvcMenu(): ?SvcMenu
    {
        return $this->svcMenu;
    }

    /**
     * @param SvcMenu|null $svcMenu
     * @return GreetingMessage
     */
    public function setSvcMenu(?SvcMenu $svcMenu): GreetingMessage
    {
        $this->svcMenu = $svcMenu;
        return $this;
    }

    /**
     * @return Dcp|null
     */
    public function getDpc(): ?Dcp
    {
        return $this->dpc;
    }

    /**
     * @param Dcp|null $dpc
     * @return GreetingMessage
     */
    public function setDpc(?Dcp $dpc): GreetingMessage
    {
        $this->dpc = $dpc;
        return $this;
    }
}
