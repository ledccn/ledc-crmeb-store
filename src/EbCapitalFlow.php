<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_capital_flow 资金流水表
 * @property integer $id 编号(主键)
 * @property string $flow_id 流水id
 * @property string $order_id 关联id
 * @property integer $store_id 门店id
 * @property integer $uid 用户id
 * @property string $nickname 昵称
 * @property string $phone 电话
 * @property string $price 交易金额
 * @property integer $trading_type 交易类型
 * @property string $pay_type 支付类型
 * @property string $mark 备注
 * @property integer $add_time 交易时间
 */
class EbCapitalFlow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_capital_flow';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
