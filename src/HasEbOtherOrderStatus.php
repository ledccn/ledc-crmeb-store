<?php

namespace Ledc\CrmebStore;

/**
 * eb_other_order_status 订单操作记录表
 * @property integer $oid 订单id
 * @property string $change_type 操作类型
 * @property string $change_message 操作备注
 * @property integer $shop_type 订单类型 1：会员卡
 * @property integer $change_time
 */
trait HasEbOtherOrderStatus
{
}
