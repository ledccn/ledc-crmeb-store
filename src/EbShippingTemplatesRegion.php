<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_shipping_templates_region 运费模板指定城市运费表
 * @property integer $id 编号(主键)
 * @property integer $province_id 省ID
 * @property integer $temp_id 模板ID
 * @property integer $city_id 城市ID
 * @property string $first 首件
 * @property string $first_price 首件运费
 * @property string $continue 续件
 * @property string $continue_price 续件运费
 * @property integer $group 计费方式1按件数,2按重量, 3按体积
 * @property string $value 
 * @property string $uniqid 分组唯一值
 */
class EbShippingTemplatesRegion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_shipping_templates_region';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
