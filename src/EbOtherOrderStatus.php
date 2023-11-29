<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_other_order_status 订单操作记录表
 * @property integer $oid 订单id
 * @property string $change_type 操作类型
 * @property string $change_message 操作备注
 * @property integer $shop_type 订单类型 1：会员卡
 * @property integer $change_time
 */
class EbOtherOrderStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_other_order_status';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
