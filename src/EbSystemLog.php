<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_log 管理员操作记录表
 * @property integer $id 管理员操作记录ID(主键)
 * @property integer $store_id 门店id
 * @property integer $admin_id 管理员id
 * @property string $admin_name 管理员姓名
 * @property string $path 链接
 * @property string $page 行为
 * @property string $method 访问类型
 * @property string $ip 登录IP
 * @property string $type 类型
 * @property integer $add_time 操作时间
 * @property integer $merchant_id 商户id
 */
class EbSystemLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_log';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
