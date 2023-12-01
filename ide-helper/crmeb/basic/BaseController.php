<?php

namespace crmeb\basic;

use app\Request;
use think\facade\App;

/**
 * 基础控制器
 */
class BaseController
{
    /**
     * 请求对象
     * @var Request
     */
    protected $request;

    /**
     * think\facade\App实例（crmeb官方就是这样的）
     * @var App|\think\App
     */
    protected $app;

    /**
     * 控制器中间件
     * @var array
     */
    protected $middleware = [];

    /**
     * 服务
     * @var null
     */
    protected $services = null;

    /**
     * 构造函数
     * @param App $app
     */
    public function __construct(App $app)
    {
    }

    /**
     * 在对象中调用一个不可访问方法时，__call() 会被调用
     * @param string $name
     * @param array $arguments
     * @return void
     */
    public function __call(string $name, array $arguments)
    {
    }

    /**
     * 子类初始化函数
     * @return void
     */
    protected function initialize()
    {
    }
}
