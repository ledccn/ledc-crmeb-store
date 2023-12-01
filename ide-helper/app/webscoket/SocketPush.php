<?php

namespace app\webscoket;

use think\swoole\Manager;

/**
 * 长连接推送
 */
class SocketPush
{
    /**
     * @var
     */
    protected static $instance;
    /**
     * @var Manager
     */
    protected Manager $manager;
    /**
     * @var string|array
     */
    protected $to;
    /**
     * @var string|array
     */
    protected $notTo;
    /**
     * @var string
     */
    protected $userType;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var array
     */
    protected $data;

    /**
     * 构造函数
     * @param Manager $manager
     */
    public function __construct(Manager $manager)
    {
    }

    /**
     * 单例
     * @return mixed
     */
    public static function instance(): self
    {
    }

    public static function user(): self
    {
    }

    public static function kefu(): self
    {
    }

    public static function admin(): self
    {
    }

    public static function store(): self
    {
    }

    public function to($to): self
    {
    }

    public function notTo($notTo): self
    {
    }

    public function setUserType(string $userType): self
    {
    }

    public function type(string $type): self
    {
    }

    public function data(array $data): self
    {
    }

    public function push(string $type = null, array $data = [])
    {
    }

    /**
     * 重置属性
     * @return void
     */
    public function reset()
    {
    }
}