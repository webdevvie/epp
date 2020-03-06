<?php

namespace Webdevvie\Epp;

use Webdevvie\Epp\Exception\DeserializationException;
use Webdevvie\Epp\Exception\SerializationException;

/**
 * Interface EppSerializerInterface
 * @package Webdevvie\Epp
 */
interface EppSerializerInterface
{
    /**
     * @param EppMessageInterface $message
     * @return string
     * @throws SerializationException
     */
    public function serialize(EppMessageInterface $message);

    /**
     * @param string $xml
     * @return null|EppMessageInterface
     * @throws DeserializationException
     */
    public function deserialize($xml);
}