<?php
/**
 * 自定义函数
 */

namespace Ledc\CrmebStore;

use Error;
use Exception;
use ReflectionClass;
use ReflectionException;
use ReflectionFunctionAbstract;
use RuntimeException;
use Throwable;

/**
 * 获取类信息
 * @param object|string $class
 * @return array[]
 */
function class_info($class): array
{
    try {
        $reflect = new ReflectionClass($class);
        $constructor = $reflect->getConstructor();
        $rs = [
            'constructor' => method_params($constructor),
        ];
        foreach (get_class_methods($class) as $item) {
            $method = $reflect->getMethod($item);
            $rs[$item] = method_params($method);
        }
        return $rs;
    } catch (ReflectionException|Exception|Error|Throwable $e) {
        throw new RuntimeException($e->getMessage());
    }
}

/**
 * 获取方法的所有参数
 * @param ReflectionFunctionAbstract $reflect
 * @return array
 */
function method_params(ReflectionFunctionAbstract $reflect): array
{
    if ($reflect->getNumberOfParameters() == 0) {
        return [];
    }
    $params = $reflect->getParameters();
    $args = [];

    foreach ($params as $param) {
        $reflectionType = $param->getType();
        $row = [
            //类型
            'type' => ($reflectionType && $reflectionType->isBuiltin() === false) ? $reflectionType->getName() : '',
            //名字
            'name' => $param->getName(),
            //默认值
            'default' => ($param->isDefaultValueAvailable() ? $param->getDefaultValue() : '无')
        ];
        $args[] = $row;
    }

    return $args;
}
