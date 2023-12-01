<?php
/**
 * 自定义函数
 */

namespace Ledc\CrmebStore;

use Error;
use Exception;
use Reflection;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
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
        $rs = [];
        $reflect = new ReflectionClass($class);
        // 静态分析：默认属性
        $rs['getDefaultProperties'] = $reflect->getDefaultProperties();

        // 静态分析：方法和参数
        $methods = [];
        foreach ($reflect->getMethods() as $reflectionMethod) {
            $modifiers = implode(' ', Reflection::getModifierNames($reflectionMethod->getModifiers()));
            $method = $reflectionMethod->getName();
            $methods[$modifiers . ' function ' . $method] = method_params($reflectionMethod);
        }
        $rs['getMethods'] = $methods;

        // 静态分析：属性
        $props = $reflect->getProperties();
        $properties = [];
        foreach ($props as $prop) {
            $reflectionType = $prop->getType();
            $row = [
                //实际类型
                'type' => $reflectionType ? $reflectionType->getName() : '',
                //注释的类型
                'comment_type' => (function () use ($prop) {
                    if ($comment = $prop->getDocComment()) {
                        if (preg_match('/@var\s+([^\s]+)/', $comment, $matches)) {
                            return $matches[1];
                        }
                    }
                    return '';
                })(),
                //名字
                'name' => $prop->getName(),
                //注释
                'getDocComment' => $prop->getDocComment(),
                //修饰符
                'getModifiers' => implode(' ', Reflection::getModifierNames($prop->getModifiers())),
                //是否静态类型
                'isStatic' => $prop->isStatic(),
                //有类型
                'hasType' => $prop->hasType(),
                //是否为默认属性
                'isDefault' => $prop->isDefault(),
                //是否为基础类型
                'isBuiltin' => $reflectionType && $reflectionType->isBuiltin(),
                //值是否允许null
                'allowsNull' => $reflectionType && $reflectionType->allowsNull(),
            ];
            $properties[] = $row;
        }
        $rs['getProperties'] = $properties;
        return $rs;
    } catch (ReflectionException|Exception|Error|Throwable $e) {
        throw new RuntimeException($e->getMessage());
    }
}

/**
 * 获取方法的所有参数
 * @param ReflectionMethod $reflect
 * @return array
 */
function method_params(ReflectionMethod $reflect): array
{
    if ($reflect->getNumberOfParameters() == 0) {
        return [];
    }

    $args = [];
    $params = $reflect->getParameters();
    foreach ($params as $param) {
        $reflectionType = $param->getType();
        $row = [
            //类型
            'type' => $reflectionType ? $reflectionType->getName() : '',
            //名字
            'name' => $param->getName(),
            //默认值
            'default' => $param->isDefaultValueAvailable() ? $param->getDefaultValue() : '',
        ];
        $args[] = $row;
    }

    return [$args, 'getDocComment' => parse_comment($reflect->getDocComment())];
}

/**
 * 解析注释
 * @param false|string $comment
 * @return array
 */
function parse_comment($comment): array
{
    if (empty($comment)) {
        return [];
    }

    if (preg_match('#^/\*\*(.*)\*/#s', $comment, $comment) === false) {
        return [];
    }

    if(preg_match_all('#^\s*\*(.*)#m', $comment, $lines) === false) {
        return [];
    }
    return $lines;
}
