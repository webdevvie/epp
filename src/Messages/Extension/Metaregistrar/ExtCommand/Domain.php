<?php
namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use Webdevvie\Epp\Messages\Command\AbstractCommandMessage;
use Webdevvie\Epp\Messages\Command\CheckMessage;
use Webdevvie\Epp\Messages\Command\CreateMessage;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Command\DeleteMessage;
use Webdevvie\Epp\Messages\Command\InfoMessage;
use Webdevvie\Epp\Messages\Command\Login\LoginMessage;
use Webdevvie\Epp\Messages\Command\RenewMessage;
use Webdevvie\Epp\Messages\Command\TransferMessage;
use Webdevvie\Epp\Messages\Command\UpdateMessage;
use JMS\Serializer\Annotation\XmlElement;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Create;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Info;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Transfer;
use Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Update;

/**
 * Class Command
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/command-ext-domain-1.0", prefix="command-ext-domain")
 */
class Domain extends AbstractCommandMessage
{
    /**
     * @var Info
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Info")
     * @SerializedName("info")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $info;

    /**
     * @var Update
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Update")
     * @SerializedName("update")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $update;

    /**
     * @var Create
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Create")
     * @SerializedName("create")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $create;

    /**
     * @var Transfer
     * @Type("Webdevvie\Epp\Messages\Extension\Metaregistrar\ExtCommand\Domain\Transfer")
     * @SerializedName("transfer")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $transfer;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("transferOp")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/command-ext-domain-1.0")
     * @Expose
     */
    protected $transferOp;

    /**
     * @return Info
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param Info $info
     * @return Domain
     */
    public function setInfo(Info $info)
    {
        $this->info = $info;
        return $this;
    }


    /**
     * @return Transfer
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * @param Transfer $transfer
     * @return Domain
     */
    public function setTransfer(Transfer $transfer)
    {
        $this->transfer = $transfer;
        return $this;
    }

    /**
     * @return Create
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @param Create $create
     * @return Domain
     */
    public function setCreate(Create $create)
    {
        $this->create = $create;
        return $this;
    }

    /**
     * @return Update
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * @param Update $update
     * @return Domain
     */
    public function setUpdate(Update $update)
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferOp()
    {
        return $this->transferOp;
    }

    /**
     * @param string $transferOp
     * @return Domain
     */
    public function setTransferOp($transferOp)
    {
        $this->transferOp = $transferOp;
        return $this;
    }
}
