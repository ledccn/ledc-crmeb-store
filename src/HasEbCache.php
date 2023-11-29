<?php

namespace Ledc\CrmebStore;

/**
 * eb_cache 微信缓存表
 * @property string $key (主键)
 * @property mixed $result 缓存数据
 * @property integer $expire_time 失效时间0=永久
 * @property integer $add_time 缓存时间
 */
trait HasEbCache
{
}
