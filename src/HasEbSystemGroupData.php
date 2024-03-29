<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_group_data 组合数据详情表
 * @property integer $id 组合数据详情ID(主键)
 * @property integer $gid 对应的数据组id
 * @property string $value 数据组对应的数据值（json数据）
 * @property integer $add_time 添加数据时间
 * @property integer $sort 数据排序
 * @property integer $status 状态（1：开启；2：关闭；）
 */
trait HasEbSystemGroupData
{
}
