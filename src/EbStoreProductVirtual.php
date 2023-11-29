<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_virtual 虚拟商品卡密表
 * @property integer $id 主键id(主键)
 * @property integer $product_id 商品id
 * @property integer $store_id 门店id
 * @property string $attr_unique 对应商品规格
 * @property string $card_no 卡密卡号
 * @property string $card_pwd 卡密密码
 * @property string $card_unique 虚拟卡密唯一值
 * @property string $order_id 购买订单id
 * @property integer $order_type 购买订单类型：1:order 2:积分订单
 * @property integer $uid 购买人id
 */
class EbStoreProductVirtual extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_virtual';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
