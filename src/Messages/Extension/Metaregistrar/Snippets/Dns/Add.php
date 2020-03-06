<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Domain
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Domain
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class Add
{
    /**
     * @var Content[]
     * @Type("array<Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns\Content>")
     * @XmlList(inline=true, entry="content",  namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $content = [];

    /**
     * @return Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Content[] $content
     * @return Add
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }
}
