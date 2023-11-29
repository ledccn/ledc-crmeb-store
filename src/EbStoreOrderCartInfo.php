<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order_cart_info 订单购物详情表
 * @property integer $id ID(主键)
 * @property integer $uid 用户uid
 * @property integer $oid 订单id
 * @property string $cart_id 购物车id
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property integer $staff_id 店员ID
 * @property integer $delivery_id 配送员ID
 * @property integer $product_id 商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property string $sku_unique sku唯一值
 * @property mixed $promotions_id 关联使用优惠活动ID
 * @property integer $is_gift 是否是赠品1:是0:否
 * @property integer $is_support_refund 是否支持退款
 * @property string $old_cart_id 拆单前cart_id
 * @property integer $cart_num 数量	
 * @property integer $refund_num 退款数量
 * @property integer $surplus_num 核销剩余数量
 * @property integer $split_surplus_num 拆分剩余数量
 * @property integer $split_status 0:未拆分1:还可以拆分2：拆分完成
 * @property integer $write_times 核销总次数
 * @property integer $write_surplus_times 核销剩余次数
 * @property integer $write_start 核销开始时间：0不限制
 * @property integer $write_end 核销结束时间：0不限制
 * @property integer $is_advent_sms 临期提醒是否发送
 * @property integer $is_expire_sms 过期提醒是否发送
 * @property integer $is_writeoff 是否核销
 * @property integer $writeoff_time 核销时间
 * @property string $cart_info 购买东西的详细信息
 * @property mixed $unique 唯一id
 * @property integer $add_time 添加时间
 */
class EbStoreOrderCartInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order_cart_info';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
