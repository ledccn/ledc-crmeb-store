<?php

namespace Ledc\CrmebStore;

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
trait HasEbStoreVisit
{
}
