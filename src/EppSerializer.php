<?php

namespace Webdevvie\Epp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\PostDeserialize;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlValue;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Webdevvie\Epp\Exception\DeserializationException;
use Webdevvie\Epp\Exception\SerializationException;
use Webdevvie\Nestis\Nestis;

class EppSerializer implements EppSerializerInterface
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var string
     */
    protected $eppMessageClass = "Webdevvie\Epp\Messages\EppMessage";

    /**
     * EppSerializer constructor.
     */
    public function __construct()
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
        new SerializationContext();
        new DeserializationContext();
        $this->nestis = new Nestis();
        $this->serializer = SerializerBuilder::create()->build();
    }

    /**
     * @param string      $xml
     * @param string|null $responseClass
     * @return null|EppMessageInterface
     * @throws DeserializationException
     */
    public function deserialize($xml, $responseClass = null)
    {
        $cl = $this->eppMessageClass;
        if (!is_null($responseClass)) {
            $cl = $responseClass;
        }
        try {

            $out = $this->serializer->deserialize(
                $xml,
                $cl,
                'xml'
            );
        } catch (\Exception $e) {
            throw $e;
            $out = null;
        }
        if (is_null($out)) {
            throw new DeserializationException('Xml could not be converted to object', 503);
        }
        $out->setRawXml($xml);
        return $out;
    }

    /**
     * @param EppMessageInterface $message
     * @return string
     * @throws SerializationException
     */
    public function serialize(EppMessageInterface $message)
    {
        $out = $this->serializer->serialize(
            $message,
            'xml',
            SerializationContext::create()->setSerializeNull(false)
        );
        if (!is_string($out)) {
            throw new SerializationException('Epp message is null', 404);
        }
        return $this->cleanupDuplicateNamespaces($out);
    }

    /**
     * @param string $xml
     * @return string
     */
    public function cleanupDuplicateNamespaces(string $xml): string
    {
        $parts = explode("<epp ", $xml, 2);
        $parts2 = explode(">", $parts[1], 2);
        //now we have all the namespaces in the top
        $nss = explode(" ", $parts2[0]);
        $keepNS = [];
        foreach ($nss as $ns) {
            if (!strstr($ns, 'xmlns')) {
                continue;
            }
            $nsparts = explode(":", $ns, 2);
            $nsparts = explode("=", $nsparts[1], 2);
            $nsname = $nsparts[0];
            $parts2[1] = str_replace(' ' . $ns, '', $parts2[1]);
            if (strstr($ns, 'xmlns="urn:ietf:params:xml:ns:epp-1.0"')) {
                $keepNS[] = $ns;
                continue;
            }
            if (strstr($parts2[1], "<$nsname:")) {
                $keepNS[] = $ns;
            }
        }
        $parts2[0] = implode(" ", $keepNS);
        $parts2[0] = str_replace("  ", ' ', $parts2[0]);
        $xml = $parts[0] . '<epp ' . $parts2[0] . '>' . $parts2[1];
        return $xml;
    }
}
