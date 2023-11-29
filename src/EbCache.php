<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_cache 微信缓存表
 * @property string $key (主键)
 * @property mixed $result 缓存数据
 * @property integer $expire_time 失效时间0=永久
 * @property integer $add_time 缓存时间
 */
class EbCache extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_cache';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'key';

    
}
