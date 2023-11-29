<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_promotions_auxiliary 优惠活动辅助表
 * @property integer $id (主键)
 * @property integer $type 类型1：关联商品2：赠送优惠券3：赠送商品
 * @property integer $promotions_id
 * @property integer $product_partake_type 参与商品类型：1:全部商品2：指定商品参与3：指定商品不参与4：指定品牌参与5：指定标签参与
 * @property integer $product_id
 * @property integer $coupon_id 优惠券id
 * @property integer $brand_id 品牌id
 * @property integer $store_label_id 商品标签id
 * @property integer $limit_num 限量个数
 * @property integer $surplus_num 限量剩余个数
 * @property integer $is_all 是否是全部规格：1是0否
 * @property mixed $unique 商品unique
 */
class EbStorePromotionsAuxiliary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_promotions_auxiliary';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
