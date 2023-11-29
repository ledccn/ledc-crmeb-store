<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_cate 商品分类辅助表
 * @property integer $id (主键)
 * @property integer $product_id 商品id
 * @property integer $cate_id 分类id
 * @property integer $add_time 添加时间
 * @property integer $cate_pid 一级分类id
 * @property integer $status 商品状态
 */
class EbStoreProductCate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_cate';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
