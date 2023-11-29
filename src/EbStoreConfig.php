<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_config 门店配置表
 * @property integer $id (主键)
 * @property integer $type 类型：1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $key_name 配置key
 * @property string $value 值
 * @property integer $add_time 添加时间
 */
class EbStoreConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_config';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
