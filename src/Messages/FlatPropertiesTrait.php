<?php

namespace Webdevvie\Epp\Messages;

/**
 * Trait FlatPropertiesTrait
 * @package Webdevvie\Epp\Messages
 */
trait FlatPropertiesTrait
{
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
