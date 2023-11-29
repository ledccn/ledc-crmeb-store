<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_description 商品详情表
 * @property integer $product_id 商品ID
 * @property string $description 商品详情
 * @property integer $type 商品类型
 */
class EbStoreProductDescription extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_description';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
