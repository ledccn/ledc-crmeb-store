<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_form_data 表单收集数据记录表
 * @property integer $id (主键)
 * @property integer $uid 用户UID
 * @property string $system_form_id 表单名称
 * @property integer $type 收集数据来源：1订单
 * @property integer $relation_id 关联数据来源ID
 * @property mixed $value 收集数据
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
trait HasEbSystemFormData
{
}
