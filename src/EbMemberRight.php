<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_member_right 会员权益
 * @property integer $id (主键)
 * @property string $right_type 权益类别(主键)
 * @property string $title  权益名称
 * @property string $show_title 显示权益名称
 * @property string $image 权益图标
 * @property string $explain 权益介绍
 * @property integer $number 规则数字
 * @property integer $sort 排序倒序
 * @property integer $status 0:禁用，1：启用
 * @property integer $add_time 添加时间
 */
class EbMemberRight extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_member_right';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'right_type';

    
}
