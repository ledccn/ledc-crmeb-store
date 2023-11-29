<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_agent_level 分销员等级表
 * @property integer $id (主键)
 * @property string $name 等级名称
 * @property string $image 背景图
 * @property integer $one_brokerage 一级分拥比例
 * @property integer $two_brokerage 二级分拥比例
 * @property integer $grade 等级
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbAgentLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_agent_level';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
