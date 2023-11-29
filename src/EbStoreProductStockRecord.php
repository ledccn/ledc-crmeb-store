<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_stock_record 商品库存记录
 * @property integer $id (主键)
 * @property integer $store_id 门店ID
 * @property integer $product_id 商品ID
 * @property string $unique 规格唯一值
 * @property string $cost_price 成本价
 * @property integer $number 数量
 * @property integer $pm 1:入库0:出库
 * @property integer $add_time 时间
 */
class EbStoreProductStockRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_stock_record';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
