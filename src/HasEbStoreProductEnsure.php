<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_product_ensure 商品保障服务表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $name 标签名称
 * @property string $image 图片
 * @property string $desc 描述
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
trait HasEbStoreProductEnsure
{
}
