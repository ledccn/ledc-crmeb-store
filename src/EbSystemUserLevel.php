<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_user_level 设置用户等级表
 * @property integer $id (主键)
 * @property integer $mer_id 商户id
 * @property string $name 会员名称
 * @property string $money 购买金额
 * @property integer $valid_date 有效时间
 * @property integer $is_forever 是否为永久会员
 * @property integer $is_pay 是否购买,1=购买,0=不购买
 * @property integer $is_show 是否显示 1=显示,0=隐藏
 * @property integer $grade 会员等级
 * @property string $discount 享受折扣
 * @property string $image 会员卡背景
 * @property string $icon 会员图标
 * @property string $explain 说明
 * @property integer $add_time 添加时间
 * @property integer $is_del 是否删除.1=删除,0=未删除
 * @property integer $exp_num 升级经验
 */
class EbSystemUserLevel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_user_level';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
