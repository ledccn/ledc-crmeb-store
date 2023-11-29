<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_unit 商品单位表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $name 单位名称
 * @property integer $sort 排序
 * @property integer $status 是否上架
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbStoreProductUnit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_unit';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
