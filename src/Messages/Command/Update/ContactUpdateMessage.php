<?php

namespace Webdevvie\Epp\Messages\Command\Update;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Snippets\Contact\Chg;

/**
 * Class Contact
 *
 * @package Webdevvie\Epp\Messages\Command\Create
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:contact-1.0", prefix="contact")
 */
class ContactUpdateMessage extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("id")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $id;

    /**
     * @var Chg
     * @Type("Webdevvie\Epp\Messages\Snippets\Contact\Chg")
     * @SerializedName("chg")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:contact-1.0")
     *
     * @Expose
     */
    protected $chg;


    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ContactUpdateMessage
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Chg
     */
    public function getChg()
    {
        return $this->chg;
    }

    /**
     * @param Chg $chg
     * @return ContactUpdateMessage
     */
    public function setChg(Chg $chg)
    {
        $this->chg = $chg;
        return $this;
    }
}
