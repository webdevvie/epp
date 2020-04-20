<?php

namespace Webdevvie\Epp\Messages\Snippets\Contact;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\SerializedName;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;

/**
 * Class Status
 *
 * @package Webdevvie\Epp\Messages\Snippets\Contact
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class Disclose extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @XmlAttribute()
     * @SerializedName("flag")
     * @Expose
     */
    protected $flag;

    /**
     * @var DiscloseItem[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Contact\DiscloseItem>")
     * @XmlList(inline=true, entry="name", namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $name = [];

    /**
     * @var DiscloseItem[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Contact\DiscloseItem>")
     * @XmlList(inline=true, entry="org", namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $org = [];

    /**
     * @var DiscloseItem[]
     * @Type("array<Webdevvie\Epp\Messages\Snippets\Contact\DiscloseItem>")
     * @XmlList(inline=true, entry="addr", namespace="urn:ietf:params:xml:ns:contact-1.0")
     * @Expose
     */
    protected $addr = [];

    /**
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param string $flag
     * @return Disclose
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * @param string $type
     * @return Disclose
     */
    public function addName($type)
    {
        $this->name[] = new DiscloseItem($type);
        return $this;
    }

    /**
     * @param string $type
     * @return Disclose
     */
    public function addOrg($type)
    {
        $this->org[] = new DiscloseItem($type);
        return $this;
    }

    /**
     * @param string $type
     * @return Disclose
     */
    public function addAddr($type)
    {
        $this->addr[] = new DiscloseItem($type);
        return $this;
    }

    /**
     * @return DiscloseItem[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return DiscloseItem[]
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * @return DiscloseItem[]
     */
    public function getAddr()
    {
        return $this->addr;
    }
}
