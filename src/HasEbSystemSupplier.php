<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_supplier 供应商表
 * @property integer $id (主键)
 * @property integer $admin_id 管理员ID
 * @property string $supplier_name 供应商名称
 * @property string $avatar 头像
 * @property string $name 联系人姓名
 * @property mixed $phone 联系电话
 * @property string $email 邮箱
 * @property string $address 省市区
 * @property integer $province 省ID
 * @property integer $city 市ID
 * @property integer $area 区ID
 * @property integer $street 街道ID
 * @property string $detailed_address 详细地址
 * @property string $bank_code 银行卡
 * @property string $bank_address 开户地址
 * @property string $alipay_account 支付宝账号
 * @property string $alipay_qrcode_url 支付宝二维码地址
 * @property string $wechat 微信号
 * @property string $wechat_qrcode_url 二维码地址
 * @property integer $sort 排序
 * @property integer $is_show 状态 0关闭 1开启
 * @property string $mark 备注
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 * @property integer $business 支持配送的物品品类
 * @property string $city_shop_id 同城配送门店编码,可自定义,但必须唯一;若不填写,则系统自动生成
 */
trait HasEbSystemSupplier
{
}
