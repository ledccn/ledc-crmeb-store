<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order_writeoff 订单核销记录
 * @property integer $id (主键)
 * @property integer $uid 用户UID
 * @property integer $oid 订单ID
 * @property integer $order_cart_id 订单商品ID
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property integer $staff_id 店员ID
 * @property integer $product_id 商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $writeoff_num 核销数量
 * @property string $writeoff_price 核销金额
 * @property string $writeoff_code 核销码
 * @property integer $add_time 核销时间
 */
class EbStoreOrderWriteoff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order_writeoff';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
