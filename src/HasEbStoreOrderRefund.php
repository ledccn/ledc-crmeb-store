<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_order_refund 售后订单表
 * @property integer $id (主键)
 * @property integer $store_order_id 订单表ID
 * @property integer $store_id 门店ID
 * @property string $order_id 订单号
 * @property integer $uid 用户UID
 * @property integer $supplier_id 供应商ID
 * @property integer $refund_type 退款申请类型1:仅退款2：退款退款3：拒绝4：同意退货5：已退货6：已退款
 * @property integer $refund_num 退款件数
 * @property string $refund_price 退款金额
 * @property string $refunded_price 已退款金额
 * @property string $refund_reason 退款的理由
 * @property string $refund_phone 退款电话
 * @property string $refund_express 退货快递单号
 * @property string $refund_express_name 退货快递名称
 * @property string $refund_explain 退款用户说明
 * @property string $refund_img 退款图片
 * @property string $refund_goods_explain 退货用户说明
 * @property string $refund_goods_img 退货凭证
 * @property string $refuse_reason 拒绝原因
 * @property string $remark 备注
 * @property integer $refunded_time 处理时间
 * @property mixed $cart_info 退款商品信息
 * @property integer $is_cancel 用户是否取消
 * @property integer $is_del 是否删除
 * @property integer $add_time 申请退款时间
 */
trait HasEbStoreOrderRefund
{
}
