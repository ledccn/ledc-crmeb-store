<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_category_brand 商品分类品牌关联
 * @property integer $id (主键)
 * @property integer $product_id 商品ID
 * @property integer $cate_id 分类ID
 * @property integer $brand_id 品牌ID
 * @property string $brand_name 品牌名称
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
class EbStoreProductCategoryBrand extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_category_brand';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
