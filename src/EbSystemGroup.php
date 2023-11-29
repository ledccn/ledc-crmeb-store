<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_group 组合数据表
 * @property integer $id 组合数据ID(主键)
 * @property integer $cate_id 分类id
 * @property string $name 数据组名称
 * @property string $info 数据提示
 * @property string $config_name 数据字段
 * @property string $fields 数据组字段以及类型（json数据）
 */
class EbSystemGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_group';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
