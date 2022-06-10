<?php

namespace Webdevvie\Epp\Messages\Command\Login;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

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
     * @var string|null
     * @Type("string")
     * @SerializedName("clID")
     *
     * @Expose
     */
    protected $clID;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("pw")
     *
     * @Expose
     */
    protected $pw;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("newPW")
     *
     * @Expose
     */
    protected $newPW;

    /**
     * @var Options[]|null
     * @Type("Webdevvie\Epp\Messages\Command\Login\Options")
     * @Expose
     */
    protected $options;

    /**
     * @var Svcs|null
     * @Type("Webdevvie\Epp\Messages\Command\Login\Svcs")
     * @SerializedName("svcs")
     *
     * @Expose
     */
    protected $svcs;

    /**
     * @return string|null
     */
    public function getClID(): ?string
    {
        return $this->clID;
    }

    /**
     * @param string|null $clID
     * @return LoginMessage
     */
    public function setClID(?string $clID): LoginMessage
    {
        $this->clID = $clID;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPw(): ?string
    {
        return $this->pw;
    }

    /**
     * @param string|null $pw
     * @return LoginMessage
     */
    public function setPw(?string $pw): LoginMessage
    {
        $this->pw = $pw;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewPW(): ?string
    {
        return $this->newPW;
    }

    /**
     * @param string|null $newPW
     * @return LoginMessage
     */
    public function setNewPW(?string $newPW): LoginMessage
    {
        $this->newPW = $newPW;
        return $this;
    }

    /**
     * @return Options[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * @param Options[]|null $options
     * @return LoginMessage
     */
    public function setOptions(?array $options): LoginMessage
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return Svcs|null
     */
    public function getSvcs(): ?Svcs
    {
        return $this->svcs;
    }

    /**
     * @param Svcs|null $svcs
     * @return LoginMessage
     */
    public function setSvcs(?Svcs $svcs): LoginMessage
    {
        $this->svcs = $svcs;
        return $this;
    }
}
