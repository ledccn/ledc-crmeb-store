<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_visit 商品浏览分析表
 * @property integer $id (主键)
 * @property integer $product_id 商品ID
 * @property string $product_type 商品类型
 * @property integer $cate_id 商品分类ID
 * @property mixed $type 商品类型
 * @property integer $uid 用户ID
 * @property integer $count 访问次数
 * @property string $content 备注描述
 * @property integer $add_time 添加时间
 */
class EbStoreVisit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_visit';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
