<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_shipping_templates 运费模板表
 * @property integer $id 编号(主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $name 模板名称
 * @property integer $group 计费方式1按件数,2按重量, 3按体积
 * @property integer $appoint 指定包邮
 * @property integer $no_delivery 指定不送达
 * @property integer $sort 排序
 * @property integer $add_time 添加时间
 */
class EbShippingTemplates extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_shipping_templates';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
