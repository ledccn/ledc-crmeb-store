<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_discounts_products 组合套餐商品表
 * @property integer $id 自增ID(主键)
 * @property integer $discount_id 优惠套餐ID
 * @property integer $product_id 商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property string $title 商品名称
 * @property string $image 商品图
 * @property integer $type 是否搭配0不是1是
 * @property integer $temp_id 运费模版Id
 */
class EbStoreDiscountsProducts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_discounts_products';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
