<?php

namespace Ledc\CrmebStore;

/**
 * 调试用：获取当前类的所有属性
 */
trait HasGetProperties
{
    /**
     * @return array
     */
    public function getProperties(): array
    {
        $rs = [];
        foreach ($this as $name => $value) {
            $row = [
                'name' => $name,
                'get_debug_type' => function_exists('get_debug_type') ? get_debug_type($value) : (function ($value) {
                    switch (true) {
                        case is_scalar($value):
                            return gettype($value);
                        case is_object($value):
                            return get_class($value);
                        case is_array($value):
                            return 'array';
                        case is_callable($value):
                            return 'callable';
                        case is_null($value):
                            return null;
                        case is_resource($value):
                            return 'resource (' . get_resource_type($value) . ')';
                        default:
                            return '';
                    }
                })($value),
                'gettype' => gettype($value),
            ];
            $rs[] = $row;
        }
        return $rs;
    }
}
