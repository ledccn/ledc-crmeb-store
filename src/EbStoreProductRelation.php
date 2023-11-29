<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_relation 商品关联辅助表
 * @property integer $id (主键)
 * @property integer $type 关联关系1：分类2：品牌3：商品标签4：用户标签5：保障服务6：商品参数
 * @property integer $product_id 商品id
 * @property integer $relation_id 分类id
 * @property integer $relation_pid 一级分类id
 * @property integer $status 商品状态
 * @property integer $add_time 添加时间
 */
class EbStoreProductRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
