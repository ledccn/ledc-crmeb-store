<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order_promotions 订单优惠活动辅助表
 * @property integer $id (主键)
 * @property integer $oid 订单ID
 * @property integer $uid 用户uid
 * @property integer $promotions_id 优惠活动ID
 * @property integer $product_id 商品ID
 * @property string $promotions_price 优惠金额
 * @property integer $add_time 添加时间
 */
class EbStoreOrderPromotions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order_promotions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
