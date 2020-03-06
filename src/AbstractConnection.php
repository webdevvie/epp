<?php

namespace Webdevvie\Epp;

use JMS\Serializer\Serializer;
use Webdevvie\Epp\Exception\ConnectionException;
use Webdevvie\Epp\Exception\DeserializationException;
use Webdevvie\Epp\Exception\LoginException;
use Webdevvie\Epp\Exception\SerializationException;
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
     *
     */
    protected $cltridPrefix = 'wbd_';

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
        $id = $this->cltridPrefix . $rand;
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
     * @param string      $xml
     * @param string|null $responseClass
     * @return EppMessageInterface
     * @throws DeserializationException
     */
    public function deserializeMessage($xml, $responseClass = null)
    {
        return $this->serializer->deserialize($xml, $responseClass);
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
