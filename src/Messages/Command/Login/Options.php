<?php
namespace Webdevvie\Epp\Messages\Command\Login;

use JMS\Serializer\Annotation as Serializer;
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
 * Class Options
 *
 * @package Webdevvie\Epp\Messages\Command\Login
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 */
class Options extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("version")
     *
     * @Expose
     */
    protected $version;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("lang")
     *
     * @Expose
     */
    protected $lang;

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Options
     */
    public function setVersion(string $version): Options
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Options
     */
    public function setLang(string $lang): Options
    {
        $this->lang = $lang;
        return $this;
    }
}
