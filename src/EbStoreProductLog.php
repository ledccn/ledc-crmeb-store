<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_log 商品统计
 * @property integer $id (主键)
 * @property string $type 类型
 * @property integer $product_id 商品ID
 * @property integer $uid 用户ID
 * @property integer $visit_num 是否浏览
 * @property integer $cart_num 加入购物车数量
 * @property integer $order_num 下单数量
 * @property integer $pay_num 支付数量
 * @property string $pay_price 支付金额
 * @property string $cost_price 商品成本价
 * @property integer $pay_uid 支付用户ID
 * @property integer $refund_num 退款数量
 * @property string $refund_price 退款金额
 * @property integer $collect_num 收藏
 * @property integer $add_time 添加时间
 * @property mixed $delete_time 删除时间
 */
class EbStoreProductLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_log';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
