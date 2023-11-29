<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_city 城市表
 * @property integer $id (主键)
 * @property integer $city_id 城市id
 * @property integer $level 省市级别
 * @property integer $parent_id 父级id
 * @property string $area_code 区号
 * @property string $name 名称
 * @property string $merger_name 合并名称
 * @property string $lng 经度
 * @property string $lat 纬度
 * @property integer $is_show 是否展示
 */
trait HasEbSystemCity
{
}
