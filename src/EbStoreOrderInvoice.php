<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order_invoice 用户开票表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property string $category 开票分类 order:订单
 * @property integer $order_id 订单id
 * @property integer $invoice_id 发票id
 * @property integer $header_type 抬头类型
 * @property integer $type 发票类型
 * @property string $name 名称（发票抬头）
 * @property string $duty_number 税号
 * @property string $drawer_phone 开票人手机号
 * @property string $email 开票人邮箱
 * @property string $tell 注册电话
 * @property string $address 注册地址
 * @property string $bank 开户行
 * @property string $card_number 银行卡号
 * @property integer $is_pay 是否支付
 * @property integer $is_refund 订单是否退款
 * @property integer $is_invoice 是否开票
 * @property string $invoice_number 开票票号
 * @property string $invoice_amount 开票金额
 * @property string $remark 备注
 * @property integer $invoice_time 开票时间
 * @property integer $is_del 是否删除
 * @property integer $add_time
 */
class EbStoreOrderInvoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order_invoice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
