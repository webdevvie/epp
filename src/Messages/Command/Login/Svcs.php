<?php
namespace Webdevvie\Epp\Messages\Command\Login;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Svcs
 *
 * @package Webdevvie\Epp\Messages\Command\Login
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class Svcs extends AbstractCommandMessage
{
    /**
     * @var string[]
     * @Type("array<string>")
     * @SerializedName("objURI")
     * @XmlList(inline=true, entry="objURI")
     *
     * @Expose
     */
    protected $objURI = [];

    /**
     * @var SvcExtension
     * @Type("Webdevvie\Epp\Messages\Command\Login\SvcExtension")
     * @SerializedName("svcExtension")
     *
     * @Expose
     */
    protected $svcExtension;


    /**
     * @return SvcExtension
     */
    public function getSvcExtension()
    {
        return $this->svcExtension;
    }

    /**
     * @param SvcExtension $svcExtension
     * @return Svcs
     */
    public function setSvcExtension(SvcExtension $svcExtension)
    {
        $this->svcExtension = $svcExtension;
        return $this;
    }

    /**
     * @return array
     */
    public function getObjURI()
    {
        return $this->objURI;
    }

    /**
     * @param array $objURI
     * @return Svcs
     */
    public function setObjURI(array $objURI)
    {
        $this->objURI = $objURI;
        return $this;
    }
}
