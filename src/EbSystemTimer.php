<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_timer 定时器
 * @property integer $id (主键)
 * @property string $name 定时器名称
 * @property string $mark 标识
 * @property integer $type 周期状态 1=N分钟 2=N小时 3=每小时 4=每天 5=N天 6=每星期 7=每月 8=每年
 * @property string $title 任务说明
 * @property integer $is_open 是否开启
 * @property string $cycle 执行周期
 * @property integer $last_execution_time 上次执行时间
 * @property integer $update_execution_time 修改时间
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbSystemTimer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_timer';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
