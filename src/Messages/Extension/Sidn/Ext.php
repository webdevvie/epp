<?php

namespace Webdevvie\Epp\Messages\Extension\Sidn;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response;
use Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData;

/**
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0", prefix="sidn-ext-epp")
 */
class Ext
{
    /**
     * @var InfData|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\InfData")
     * @SerializedName("infData")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $infData;

    /**
     * @var Response|null
     * @Type("Webdevvie\Epp\Messages\Extension\Sidn\ExtEpp\Response")
     * @SerializedName("response")
     * @XmlElement(namespace="http://rxsd.domain-registry.nl/sidn-ext-epp-1.0")
     * @Expose
     */
    protected $response;

    /**
     * @return InfData|null
     */
    public function getInfData(): ?InfData
    {
        return $this->infData;
    }

    /**
     * @param InfData|null $infData
     * @return Ext
     */
    public function setInfData(?InfData $infData): Ext
    {
        $this->infData = $infData;
        return $this;
    }

    /**
     * @return Response|null
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }

    /**
     * @param Response|null $response
     * @return Ext
     */
    public function setResponse(?Response $response): Ext
    {
        $this->response = $response;
        return $this;
    }


}
