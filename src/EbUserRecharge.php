<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_recharge 用户充值表
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $uid 充值用户UID
 * @property integer $staff_id 店员ID
 * @property string $order_id 订单号
 * @property string $trade_no 微信订单号
 * @property string $price 充值金额
 * @property string $give_price 购买赠送金额
 * @property string $recharge_type 充值类型
 * @property string $auth_code 收款码条码值
 * @property integer $paid 是否充值
 * @property integer $pay_time 充值支付时间
 * @property integer $add_time 充值时间
 * @property string $refund_price 退款金额
 * @property string $channel_type 用户访问端标识
 * @property string $remarks 备注
 */
class EbUserRecharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_recharge';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
