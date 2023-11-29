<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_brokerage_frozen 用户佣金冻结记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property string $price 金额
 * @property integer $uill_id 关联id
 * @property integer $frozen_time 冻结到期时间
 * @property integer $status 是否有效
 * @property integer $add_time 添加时间
 * @property string $order_id 订单id
 */
class EbUserBrokerageFrozen extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_brokerage_frozen';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
