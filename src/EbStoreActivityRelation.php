<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_activity_relation 活动关联表中间表(多对多)
 * @property integer $id (主键)
 * @property integer $activity_id 
 * @property integer $product_id
 */
class EbStoreActivityRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_activity_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
