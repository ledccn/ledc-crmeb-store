<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_other_order 会员购买记录表
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $staff_id 店员ID
 * @property integer $uid 用户uid
 * @property integer $type 区别 
0：免费领取
1：购买会员卡 
2：卡密领取会员卡 
3：收银订单 
4：管理员赠送
 * @property string $order_id 订单号
 * @property string $member_type 会员类型 
月卡：month
季卡：quarter
年卡：year
永久：ever
免费：free
 * @property string $code 卡号
 * @property string $pay_type 支付方式
 * @property integer $paid 支付状态 0:  未支付 1：已支付
 * @property string $pay_price 支付金额
 * @property string $member_price 会员卡价格
 * @property integer $pay_time 会员购买时间
 * @property string $trade_no 支付宝支付,支付宝交易订单号
 * @property string $channel_type 支付渠道(微信公众号 h5 小程序)
 * @property integer $is_free 是否免费
 * @property integer $is_permanent 是否永久
 * @property integer $overdue_time 会员过期时间
 * @property integer $is_del 删除
 * @property integer $vip_day 会员有效天数
 * @property integer $add_time 添加时间
 * @property string $money 原价格
 * @property string $remarks 备注
 */
class EbOtherOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_other_order';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
