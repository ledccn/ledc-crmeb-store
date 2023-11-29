<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_shipping_templates_no_delivery 运费模板指定不送达表
 * @property integer $id (主键)
 * @property integer $province_id 省ID
 * @property integer $temp_id 模板ID
 * @property integer $city_id 城市ID
 * @property string $value
 * @property string $uniqid 分组唯一值
 */
class EbShippingTemplatesNoDelivery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_shipping_templates_no_delivery';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
