<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_category 标签分类
 * @property integer $id (主键)
 * @property integer $pid 上级id
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $owner_id 所属人，为全部
 * @property string $name 分类名称
 * @property integer $sort 排序
 * @property integer $group 分类类型0=标签分类，1=快捷短语分类,2=商品标签分类，3=商品参数模版,4=企业渠道码，5=门店分类，6=桌码分类
 * @property string $other 其他参数
 * @property integer $is_show 是否显示
 * @property integer $add_time 添加时间
 */
class EbCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
