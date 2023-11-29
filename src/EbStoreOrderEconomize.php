<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order_economize 用户资金节省表
 * @property integer $id 订单ID(主键)
 * @property string $order_id 订单号(主键)
 * @property integer $uid 用户id(主键)
 * @property integer $order_type 配送方式 1=商品订单 ，2=线下订单
 * @property string $pay_price 实际支付金额
 * @property string $postage_price 邮费优惠金额
 * @property string $member_price 会员优惠金额
 * @property string $offline_price 线下优惠金额
 * @property string $coupon_price 优惠券优惠金额
 * @property integer $add_time 创建时间
 * @property integer $status 状态
 */
class EbStoreOrderEconomize extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order_economize';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'uid';

    
}
