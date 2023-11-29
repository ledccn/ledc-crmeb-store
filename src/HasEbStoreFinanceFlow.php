<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_finance_flow 门店资金流水表
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $uid 用户id
 * @property integer $staff_id 店员id
 * @property string $order_id 交易单号
 * @property string $link_id 关联订单
 * @property integer $pm 0 = 支出 1 = 获得
 * @property string $number 明细
 * @property string $type 交易类型(1:支付订单,2,门店订单,3,订单手续费,4:退款订单,5:充值返点,6:付费会员返点,7:充值订单,8:付费订单,9:收银订单
 * )
 * @property string $pay_type 支付方式
 * @property string $pay_price 实际支付金额
 * @property string $total_price 订单总金额
 * @property integer $rate 费率
 * @property integer $trade_type 1:流水，2：交易
 * @property string $remark 备注
 * @property string $mark 门店备注
 * @property integer $trade_time 交易时间
 * @property integer $add_time 添加时间
 * @property integer $is_del 是否删除
 */
trait HasEbStoreFinanceFlow
{
}
