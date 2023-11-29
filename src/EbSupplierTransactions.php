<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_supplier_transactions 供应商交易表
 * @property integer $id ID(主键)
 * @property integer $supplier_id 供应商ID
 * @property integer $uid 用户id
 * @property string $order_id 交易单号
 * @property string $link_id 关联订单
 * @property integer $pm 0 = 支出 1 = 获得
 * @property string $type 交易类型(1:支付订单,2:退款订单)
 * @property string $pay_type 支付方式
 * @property string $pay_price 实际支付金额
 * @property string $total_price 订单总金额
 * @property string $remark 平台备注
 * @property string $mark 供应商备注
 * @property integer $is_del 是否删除
 * @property integer $trade_time 交易时间
 * @property integer $add_time 添加时间
 */
class EbSupplierTransactions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_supplier_transactions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
