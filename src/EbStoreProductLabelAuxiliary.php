<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_label_auxiliary 商品标签辅助表
 * @property integer $id (主键)
 * @property integer $label_id 
 * @property integer $product_id
 */
class EbStoreProductLabelAuxiliary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_label_auxiliary';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
