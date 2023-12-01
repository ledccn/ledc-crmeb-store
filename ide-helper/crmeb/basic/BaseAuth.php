<?php

namespace crmeb\basic;

/**
 * CRMEB权限验证
 */
class BaseAuth
{
    /**
     * 在对象中调用一个不可访问方法时，__call() 会被调用
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
    }
}
