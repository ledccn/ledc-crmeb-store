<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_coupon 商品关联优惠券表
 * @property integer $id (主键)
 * @property integer $product_id 商品id
 * @property integer $issue_coupon_id 优惠劵id
 * @property integer $add_time 添加时间
 * @property string $title 优惠券名称
 */
class EbStoreProductCoupon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_coupon';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
