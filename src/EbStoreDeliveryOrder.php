<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_delivery_order 发货配送订单
 * @property integer $id (主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $relation_id 关联门店、供应商ID
 * @property integer $oid 订单ID
 * @property integer $uid 
 * @property integer $station_type 平台类型
 * @property string $order_id 订单ID
 * @property string $delivery_no 配送方订单号
 * @property string $city_code 所属城市
 * @property string $cargo_price 配送订单价格
 * @property string $finish_code 收货码
 * @property string $user_name 用户名
 * @property string $receiver_phone 收货人电话
 * @property string $from_address 起始位置
 * @property string $to_address 结束位置
 * @property string $from_lat 
 * @property string $from_lng 
 * @property string $to_lat 
 * @property string $to_lng 
 * @property float $distance 配送距离
 * @property string $fee 配送费
 * @property string $deduct_fee 取消订单违约金
 * @property integer $mer_id 商户ID
 * @property string $mark 订单备注
 * @property integer $status 状态 取消=-1, 待取货＝2,配送中＝3,已完成＝4,物品返回中=9,物品返回完成=10,骑士到店=100
 * @property string $reason 取消原因
 * @property integer $add_time 添加时间
 */
class EbStoreDeliveryOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_delivery_order';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
