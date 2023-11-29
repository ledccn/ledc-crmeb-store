<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_order 订单表
 * @property integer $id 订单ID(主键)
 * @property integer $type 类型 0:普通、1：秒杀、2:砍价、3:拼团、4:积分、5:套餐、6:预售、7:新人礼、8:抽奖、9:拼单、10:桌码
 * @property integer $pid 父类订单id
 * @property string $order_id 订单号
 * @property integer $supplier_id 供应商ID
 * @property integer $store_id 门店id
 * @property string $trade_no 支付宝订单号
 * @property integer $uid 用户id
 * @property string $real_name 用户姓名
 * @property string $user_phone 用户电话
 * @property string $user_address 详细地址
 * @property string $user_location 用户地址定位
 * @property string $cart_id 购物车ids
 * @property integer $activity_id 活动商品ID
 * @property string $activity_append 活动附加字段
 * @property string $freight_price 运费金额
 * @property integer $total_num 订单商品总数
 * @property string $total_price 订单总价
 * @property string $total_postage 邮费
 * @property string $pay_price 实际支付金额
 * @property string $pay_postage 支付邮费
 * @property string $deduction_price 抵扣金额
 * @property integer $coupon_id 优惠券id
 * @property string $coupon_price 优惠券金额
 * @property string $promotions_price 优惠活动优惠金额
 * @property string $first_order_price 首单优惠金额
 * @property string $change_price 改价优惠金额
 * @property integer $paid 支付状态
 * @property integer $pay_time 支付时间
 * @property string $pay_type 支付方式
 * @property integer $add_time 创建时间
 * @property integer $status 订单状态（0：待发货；1：待收货；2：已收货；3：待评价；4：部分发货；5：部分核销；）
 * @property integer $refund_status 0 未退款 1 申请中 2 已退款 3 部分退款
 * @property integer $refund_type 退款申请类型1:仅退款2：退款退款3：拒绝4：同意退货5：已退货6：已退款
 * @property string $refund_express 退货快递单号
 * @property string $refund_reason_wap_img 退款图片
 * @property string $refund_reason_wap_explain 退款用户说明
 * @property integer $refund_reason_time 退款时间
 * @property string $refund_reason_wap 前台退款原因
 * @property string $refund_reason 不退款的理由
 * @property string $refund_price 退款金额
 * @property string $delivery_name 快递名称/送货人姓名
 * @property string $delivery_code 快递公司编码
 * @property string $delivery_type 发货类型
 * @property string $delivery_id 快递单号/手机号
 * @property string $fictitious_content 虚拟发货内容
 * @property integer $delivery_uid 配送员id
 * @property string $gain_integral 消费赚取积分
 * @property string $use_integral 使用积分
 * @property string $back_integral 给用户退了多少积分
 * @property integer $spread_uid 上级推广人uid
 * @property integer $spread_two_uid 上上级推广人uid
 * @property string $one_brokerage 一级返佣金额
 * @property string $two_brokerage 二级返佣金额
 * @property string $mark 备注
 * @property integer $is_del 是否删除
 * @property mixed $unique 唯一id(md5加密)类似id
 * @property string $remark 管理员备注
 * @property integer $mer_id 商户ID
 * @property integer $is_mer_check 
 * @property integer $pink_id 拼团id 0没有拼团
 * @property string $cost 成本价
 * @property string $verify_code 核销码
 * @property integer $staff_id 店员ID
 * @property integer $shipping_type 配送方式 1=快递 ，2=门店自提，3=门店配送，4=门店收银
 * @property integer $clerk_id 店员id
 * @property integer $is_channel 支付渠道(0微信公众号1微信小程序)
 * @property integer $is_remind 消息提醒
 * @property integer $is_system_del 后台是否删除
 * @property string $channel_type 用户访问端标识
 * @property string $province 用户省份
 * @property string $express_dump 订单面单打印信息
 * @property string $kuaidi_label 快递单号图片
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property string $virtual_info 虚拟商品信息
 * @property mixed $custom_form 自定义表单
 * @property mixed $promotions_give 优惠活动赠送
 * @property integer $give_integral 优惠活动赠送积分
 * @property mixed $give_coupon 优惠活动赠送优惠券
 * @property integer $erp_id ERP内部单号
 * @property string $erp_order_id ERP订单ID
 */
class EbStoreOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_order';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
