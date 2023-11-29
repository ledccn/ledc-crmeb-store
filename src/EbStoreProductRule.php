<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_rule 商品规则值(规格)表
 * @property integer $id (主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $rule_name 规格名称
 * @property string $rule_value 规格值
 */
class EbStoreProductRule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_rule';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
