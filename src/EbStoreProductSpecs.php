<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_specs 商品参数表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $temp_id 模版ID
 * @property string $name 参数名称
 * @property string $value 参数值
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
class EbStoreProductSpecs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_specs';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
