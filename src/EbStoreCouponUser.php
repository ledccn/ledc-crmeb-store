<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_coupon_user 优惠券发放记录表
 * @property integer $id 优惠券发放记录id(主键)
 * @property integer $cid 兑换的项目id
 * @property integer $uid 优惠券所属用户
 * @property string $coupon_title 优惠券名称
 * @property string $coupon_price 优惠券的面值
 * @property string $use_min_price 最低消费多少金额可用优惠券
 * @property integer $add_time 优惠券创建时间
 * @property integer $start_time 
 * @property integer $end_time 优惠券结束时间
 * @property integer $use_time 使用时间
 * @property string $type 获取方式
 * @property integer $status 状态（0：未使用，1：已使用, 2:已过期）
 * @property integer $is_fail 是否有效
 */
class EbStoreCouponUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_coupon_user';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
