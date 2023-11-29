<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_cart 购物车表
 * @property integer $id 购物车表ID(主键)
 * @property integer $uid 用户ID
 * @property string $tourist_uid 游客uid
 * @property integer $type 类型 0:普通、1：秒杀、2:砍价、3:拼团、4:积分、5:套餐、9:拼单、10:桌码
 * @property integer $product_id 商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $activity_id 活动商品ID
 * @property integer $collate_code_id 拼单ID/桌码ID
 * @property integer $store_id 门店id
 * @property integer $staff_id 店员id
 * @property string $product_attr_unique 商品属性
 * @property integer $cart_num 商品数量
 * @property integer $is_pay 0 = 未购买 1 = 已购买
 * @property integer $is_new 是否为立即购买
 * @property integer $status 购物车商品状态
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbStoreCart extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_cart';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
