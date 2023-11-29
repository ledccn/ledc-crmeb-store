<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_attr_result 商品属性详情表
 * @property integer $id (主键)
 * @property integer $product_id 商品ID
 * @property mixed $result 商品属性参数
 * @property integer $change_time 上次修改时间
 * @property integer $type 活动类型 0=商品，1=秒杀，2=砍价，3=拼团
 */
class EbStoreProductAttrResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_attr_result';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
