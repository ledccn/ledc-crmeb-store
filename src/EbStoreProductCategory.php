<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_category 商品分类表
 * @property integer $id 商品分类表ID(主键)
 * @property integer $pid 父id
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $cate_name 分类名称
 * @property integer $sort 排序
 * @property string $pic 图标
 * @property integer $is_show 是否推荐
 * @property integer $add_time 添加时间
 * @property string $big_pic 分类大图
 */
class EbStoreProductCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
