<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_product_attr 商品属性表
 * @property integer $id (主键)
 * @property integer $product_id 商品ID
 * @property string $attr_name 属性名
 * @property mixed $attr_values 属性值
 * @property integer $type 活动类型 0=商品，1=秒杀，2=砍价，3=拼团
 */
trait HasEbStoreProductAttr
{
}
