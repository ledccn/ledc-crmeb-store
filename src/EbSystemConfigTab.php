<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_config_tab 配置分类表
 * @property integer $id 配置分类id(主键)
 * @property integer $is_store 0=总后台,1=门店
 * @property integer $pid 上级分类id
 * @property string $title 配置分类名称
 * @property string $eng_title 配置分类英文名称
 * @property integer $status 配置分类状态
 * @property integer $info 配置分类是否显示
 * @property string $icon 图标
 * @property integer $type 配置类型
 * @property integer $sort 排序
 */
class EbSystemConfigTab extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_config_tab';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
