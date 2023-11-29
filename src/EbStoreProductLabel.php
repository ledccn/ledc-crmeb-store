<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_label 商品标签表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $label_cate 标签分类
 * @property string $label_name 标签名称
 * @property integer $sort 排序
 * @property integer $add_time 添加时间
 */
class EbStoreProductLabel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_label';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
