<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_user_apply 用户申请表
 * @property integer $id ID(主键)
 * @property integer $type 申请类型1:门店2:供应商
 * @property integer $relation_id 关联商户
 * @property integer $uid 用户ID
 * @property string $phone 手机号
 * @property string $system_name 商户名称
 * @property string $name 联系人名称
 * @property string $images 多图
 * @property string $mark 备注
 * @property integer $status 处理状态0未处理，1通过 ，2未通过
 * @property string $fail_msg 未通过原因
 * @property integer $is_del 删除状态 1删除 ，0未删除
 * @property integer $status_time 审核时间
 * @property integer $add_time 添加时间
 */
class EbSystemUserApply extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_user_apply';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
