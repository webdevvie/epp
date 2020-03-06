<?php
namespace Webdevvie\Epp\Messages\ResData\RenData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\ResData\ChkData\DomainCD;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\XmlSerializationVisitor;
use JMS\Serializer\SerializationContext;

use JMS\Serializer\Annotation\PostSerialize;
use Webdevvie\Epp\Messages\Snippets\Domain\AuthInfo;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainContact;
use Webdevvie\Epp\Messages\Snippets\Domain\DomainHost as DomainHostSnippet;
use Webdevvie\Epp\Messages\Snippets\Domain\Ns;
use Webdevvie\Epp\Messages\Snippets\Domain\Status;

/**
 * Class Domain
 *
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:domain-1.0", prefix="domain")
 */
class DomainRenData extends AbstractCommandMessage
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var \DateTime
     * @Type("DateTime")
     * @SerializedName("exDate")
     * @XmlElement(namespace="urn:ietf:params:xml:ns:domain-1.0")
     * @expose
     */
    protected $exDate;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return DomainRenData
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExDate()
    {
        return $this->exDate;
    }

    /**
     * @param \DateTime $exDate
     * @return DomainRenData
     */
    public function setExDate(\DateTime $exDate)
    {
        $this->exDate = $exDate;
        return $this;
    }
}
