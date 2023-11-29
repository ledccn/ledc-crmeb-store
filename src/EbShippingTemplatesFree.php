<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_shipping_templates_free 运费模板指定包邮关联表
 * @property integer $id 编号(主键)
 * @property integer $province_id 省ID
 * @property integer $temp_id 模板ID
 * @property integer $city_id 城市ID
 * @property string $number 包邮件数
 * @property string $price 包邮金额
 * @property integer $group 计费方式1按件数,2按重量, 3按体积
 * @property string $value
 * @property string $uniqid 分组唯一值
 */
class EbShippingTemplatesFree extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_shipping_templates_free';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
