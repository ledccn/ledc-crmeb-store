<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_brand 品牌表
 * @property integer $id (主键)
 * @property string $brand_name 品牌名称
 * @property integer $pid 父ID
 * @property string $fid 父ID集合 
 * @property integer $store_id 门店ID
 * @property integer $sort 排序
 * @property integer $is_show 是否显示	
 * @property integer $add_time 添加时间
 * @property integer $is_del 是否删除
 */
class EbStoreBrand extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_brand';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
