<?php
namespace Webdevvie\Epp\Messages\Command;

use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\XmlDeserializationVisitor;
use JMS\Serializer\Annotation\ExclusionPolicy;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\XmlSerializationVisitor;
use Webdevvie\Epp\Messages\AbstractEppMessage;

/**
 * Class AbstractCommandMessage
 *
 * @package Webdevvie\Epp\Messages\Command
 * @ExclusionPolicy("all")
 * @SuppressWarnings(PHPMD.NumberOfChildren)
 */
abstract class AbstractCommandMessage extends AbstractEppMessage
{
    /**
     * @var string
     */
    protected $messageHandler = '';

    /**
     * @var string
     */
    protected $ralMessageHandler = '';

    /**
     * @return array
     */
    public function getFlatProperties()
    {
        $values = [];
        foreach ($this as $key => $value) {
            if (is_object($value)) {
                //go into it
                if (method_exists($value, 'getFlatProperties') && is_callable([$value, 'getFlatProperties'])) {
                    $values = array_merge($values, $value->getFlatProperties());
                } else {
                    $values[$key] = $value;
                }
            } else {
                $values[$key] = $value;
            }
        }
        return $values;
    }
}
