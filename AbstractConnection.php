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
use Webdevvie\Epp\Exception\LoginException;
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
    protected $serializer;

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
     * @param Serializer|null $serializer
     */
    public function __construct($serializer = null)
    {

        //problem with jmsserializer and doctrine annotations in newer symfony versions
        new ExclusionPolicy(['value' => 'ALL']);
        new Type();
        new SerializedName(['value' => 'string']);
        new Expose();
        new XmlNamespace();
        new XmlRoot();
        new PostDeserialize();
        new XmlElement();
        new XmlList();
        new XmlAttribute();
        new XmlValue();
        $this->nestis = new Nestis();
        if (is_null($serializer)) {
            $this->serializer = SerializerBuilder::create()->build();
        }
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
     * @var string
     */
    protected $eppMessageClass = "Webdevvie\Epp\Messages\EppMessage";

    /**
     * @param EppMessage $eppMessage
     * @return string
     */
    public function serializeMessage(EppMessage $eppMessage)
    {
        return $this->serializer->serialize(
            $eppMessage,
            'xml',
            SerializationContext::create()->setSerializeNull(false)
        );
    }

    /**
     * @param string      $xml
     * @param string|null $eppMessageClass
     * @return EppMessage|null
     */
    public function deserializeMessage($xml, $eppMessageClass = null)
    {
        if (is_null($eppMessageClass)) {
            $eppMessageClass = $this->eppMessageClass;
        }
        try {
            $out = $this->serializer->deserialize(
                $xml,
                $eppMessageClass,
                'xml',
                DeserializationContext::create()->setSerializeNull(false)
            );
        } catch (\Exception $e) {
            $out = null;
        }
        if (is_null($out)) {
            return $out;
        }
        $out->setRawXml($xml);
        return $out;
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
     * @throws ConnectionException
     * @throws LoginException
     * @return void
     */
    public function disconnect()
    {
    }
}
