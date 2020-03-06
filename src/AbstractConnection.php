<?php

namespace Webdevvie\Epp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Serializer;
use Webdevvie\Epp\Exception\ConnectionException;
use Webdevvie\Epp\Exception\DeserializationException;
use Webdevvie\Epp\Exception\LoginException;
use Webdevvie\Epp\Exception\SerializationException;
use Webdevvie\Epp\Messages\EppMessage;
use Webdevvie\Nestis\Nestis;

/**
 * Class AbstractConnection
 * @package Webdevvie\Epp
 */
abstract class AbstractConnection implements ConnectionInterface
{
    /**
     * @var Serializer
     */
    protected $serializer = null;

    /**
     * @var Nestis
     */
    protected $nestis;

    /**
     * @var boolean
     */
    protected $autoDestruct = true;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->nestis = new Nestis();
        if (is_null($this->serializer)) {
            $this->serializer = new EppSerializer();
        }
    }

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        return $this->serializer;
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
        try {
            if ($this->autoDestruct) {
                $this->disconnect();
            }
        } catch (\Exception $exception) {
            //well.. thats it folks
        }
    }

    /**
     * @return string
     */
    protected function generateClTRID()
    {
        $now = microtime(true);
        $rand = substr(sha1(uniqid('', true) . $now), 0, 60);
        $id = 'we_' . $rand;
        return $id;
    }

    /**
     * @param EppMessageInterface $eppMessage
     * @return string
     * @throws SerializationException
     */
    public function serializeMessage(EppMessageInterface $eppMessage)
    {
        return $this->serializer->serialize($eppMessage);
    }

    /**
     * @param string $xml
     * @return EppMessageInterface
     * @throws DeserializationException
     */
    public function deserializeMessage($xml)
    {
        return $this->serializer->deserialize($xml);
    }

    /**
     * @param boolean $autoDestruct
     * @return void
     */
    public function setAutoDestruct($autoDestruct)
    {
        $this->autoDestruct = $autoDestruct;
    }

    /**
     * @return void
     * @throws LoginException
     * @throws ConnectionException
     */
    public function disconnect()
    {
    }
}
