<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_page_category 页面链接分类
 * @property integer $id (主键)
 * @property integer $pid 父类id
 * @property string $type 类型:link、special、product、product_category、custom
 * @property string $name 分类名称
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
class EbPageCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_page_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
