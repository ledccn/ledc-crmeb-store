<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_coupon_product 优惠卷模板关联列表
 * @property integer $coupon_id 优惠卷模板id
 * @property integer $product_id 商品id
 */
class EbStoreCouponProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_coupon_product';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
