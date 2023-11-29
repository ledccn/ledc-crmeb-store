<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_integral_order 积分订单表
 * @property integer $id 订单ID(主键)
 * @property string $order_id 订单号
 * @property string $trade_no 支付订单号
 * @property integer $uid 用户id
 * @property string $real_name 用户姓名
 * @property string $user_phone 用户电话
 * @property string $user_address 详细地址
 * @property integer $product_id 商品id
 * @property string $image 商品图片
 * @property string $store_name 商品名称
 * @property string $suk 规格
 * @property mixed $unique 唯一值
 * @property mixed $cart_info 积分商品信息
 * @property integer $total_num 订单商品总数
 * @property string $price 价格
 * @property string $total_price 总价格
 * @property integer $integral 积分价格
 * @property integer $total_integral 总积分
 * @property integer $paid 支付状态
 * @property integer $pay_time 支付时间
 * @property string $pay_type 支付方式
 * @property integer $add_time 创建时间
 * @property integer $status 1：待发货；2：待收货；3：已完成；
 * @property string $delivery_name 快递名称/送货人姓名
 * @property string $delivery_code 快递公司编码
 * @property string $delivery_type 发货类型
 * @property string $delivery_id 快递单号/手机号
 * @property string $fictitious_content 虚拟发货内容
 * @property integer $delivery_uid 配送员id
 * @property string $mark 备注
 * @property integer $is_del 是否删除
 * @property string $remark 管理员备注
 * @property integer $mer_id 商户ID
 * @property integer $is_mer_check
 * @property integer $is_remind 消息提醒
 * @property integer $is_system_del 后台是否删除
 * @property string $channel_type 用户访问端标识
 * @property string $province 用户省份
 * @property string $express_dump 订单面单打印信息
 * @property string $verify_code 核销码
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property string $virtual_info 虚拟商品信息
 * @property mixed $custom_form 自定义表单
 */
trait HasEbStoreIntegralOrder
{
}
