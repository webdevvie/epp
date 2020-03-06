<?php

namespace Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use Webdevvie\Epp\Messages\FlatPropertiesTrait;

/**
 * Class Content
 *
 * @package Webdevvie\Epp\Messages\Extension\Metaregistrar\Snippets\Dns
 * @ExclusionPolicy("all")
 * @XmlNamespace(uri="urn:ietf:params:xml:ns:epp-1.0")
 * @XmlNamespace(uri="http://www.metaregistrar.com/epp/dns-ext-1.0", prefix="dns-ext")
 */
class Content
{
    use FlatPropertiesTrait;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $name;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("type")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $type;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("ttl")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $ttl;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("content")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $content;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("priority")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     * @Expose
     */
    protected $priority = null;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("disabled")
     * @XmlElement(namespace="http://www.metaregistrar.com/epp/dns-ext-1.0")
     *
     * @Expose
     */
    protected $disabled = false;

    /**
     * Content constructor.
     * @param string  $name
     * @param string  $content
     * @param string  $type
     * @param integer $ttl
     * @param integer $priority
     * @param boolean $disabled
     * @return void
     */
    public function init($name, $content, $type, $ttl, $priority, $disabled = false)
    {
        $this->name = $name;
        $this->content = $content;
        $this->type = $type;
        $this->ttl = $ttl;
        $this->priority = $priority;
        $this->setDisabled($disabled);
    }

    /**
     * @param mixed $record
     * @param mixed $rrset
     * @return void
     */
    public function initFromRecord($record, $rrset)
    {
        $name = $rrset->getName();
        $nameLen = strlen($name);
        $this->name = (substr($name, $nameLen - 1) == "." ? substr($name, 0, $nameLen - 1) : $name);
        $this->type = $rrset->getType();
        $this->ttl = $rrset->getTtl();
        $content = $record->getContent();
        if (in_array($this->type, ['MX', 'SRV', 'CAA', 'TLSA'])) {
            $parts = explode(" ", $content, 2);
            $this->priority = $parts[0];
            $this->content = $parts[1];
        } else {
            $this->content = $content;
            //disabled otherwise the content will not match. We might want to put this back in the future
            //(substr($content, strlen($content) - 1) == "." ? substr($content, 0, strlen($content) - 1) : $content);
        }
        $this->setDisabled($record->isDisabled());
    }

    /**
     * @param Content $external
     * @return boolean
     */
    public function matches(Content $external)
    {
        list($thisFlatProperties, $externalProps) = $this->prepMatch($external);
        foreach ($thisFlatProperties as $name => $flatProperty) {
            if (!isset($externalProps[$name]) || $externalProps[$name] != $flatProperty) {
                return false;
            }
        }
        return true;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Content
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return integer
     */
    public function getTtl()
    {
        return $this->ttl;
    }

    /**
     * @param integer $ttl
     * @return Content
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param boolean $disabled
     * @return Content
     */
    public function setDisabled($disabled = false)
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Content
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param integer $priority
     * @return Content
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @param Content $external
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     * @return array
     */
    protected function prepMatch(Content $external)
    {
        $thisFlatProperties = $this->getFlatProperties();
        if (!isset($thisFlatProperties['priority']) || $thisFlatProperties['priority'] == '') {
            $thisFlatProperties['priority'] = '0';
        }
        if (!isset($thisFlatProperties['disabled']) || $thisFlatProperties['disabled'] == '') {
            $thisFlatProperties['disabled'] = 'false';
        }
        $externalProps = $external->getFlatProperties();
        if (!isset($externalProps['priority']) || $externalProps['priority'] == '') {
            $externalProps['priority'] = '0';
        }
        if (!isset($externalProps['disabled']) || !is_bool($externalProps['disabled'])) {
            $externalProps['disabled'] = 'false';
        } elseif (isset($externalProps['disabled']) && is_bool($externalProps['disabled'])) {
            $externalProps['disabled'] = ($externalProps['disabled'] ? 'true' : 'false');
        }
        if (substr($thisFlatProperties['content'], -1) == '.' && substr($externalProps['content'], -1) != '.') {
            $externalProps['content'] .= '.';
        }
        if (substr($externalProps['content'], -1) == '.' && substr($thisFlatProperties['content'], -1) != '.') {
            $thisFlatProperties['content'] .= '.';
        }
        return array($thisFlatProperties, $externalProps);
    }
}
