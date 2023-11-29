<?php

namespace Ledc\CrmebStore;

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
trait HasEbStoreOrderPromotions
{
}
