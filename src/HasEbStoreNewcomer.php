<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_newcomer 新人专享商品
 * @property integer $id 自增ID(主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_id 商品id
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $price 商品价格
 * @property string $ot_price 市场价
 * @property integer $sales 销量
 * @property integer $is_del 是否删除
 * @property integer $update_time 更新时间
 * @property integer $add_time 添加时间
 */
trait HasEbStoreNewcomer
{
}
