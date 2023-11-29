<?php

namespace Ledc\CrmebStore;

use think\Model;

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
class EbSystemFormData extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_form_data';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
