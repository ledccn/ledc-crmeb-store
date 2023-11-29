<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_city_area 城市数据表
 * @property integer $id (主键)
 * @property string $path 省市级别
 * @property integer $parent_id 父级id
 * @property string $type 类型
 * @property integer $level 级别
 * @property integer $snum 子级个数
 * @property string $name 名称
 * @property mixed $create_time
 */
class EbCityArea extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_city_area';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
