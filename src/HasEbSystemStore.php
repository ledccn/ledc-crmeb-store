<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_store 门店自提
 * @property integer $id (主键)
 * @property integer $type 门店类型：1自营2加盟
 * @property integer $cate_id 门店分类ID
 * @property string $cate_com 门店分类组合
 * @property integer $erp_shop_id EPR门店id
 * @property string $name 门店名称
 * @property string $introduction 简介
 * @property mixed $phone 手机号码
 * @property string $address 省市区
 * @property integer $province 省ID
 * @property integer $city 市ID
 * @property integer $area 区ID
 * @property integer $street 街道ID
 * @property string $detailed_address 详细地址
 * @property string $image 门店logo
 * @property string $oblong_image 门店推荐图
 * @property mixed $latitude 纬度
 * @property mixed $longitude 经度
 * @property string $bank_code 银行卡
 * @property string $bank_address 开户地址
 * @property string $alipay_account 支付宝账号
 * @property string $alipay_qrcode_url 支付宝二维码地址
 * @property string $wechat 微信号
 * @property string $wechat_qrcode_url 微信二维码地址
 * @property string $valid_time 核销有效日期
 * @property integer $valid_range 有效距离
 * @property string $day_time 每日营业开关时间
 * @property string $day_start 每日营业开始时间
 * @property string $day_end 每日营业结束时间
 * @property integer $add_time 添加时间
 * @property integer $is_show 是否显示
 * @property integer $is_del 是否删除
 * @property integer $is_store 是否到店自提
 * @property integer $default_delivery 默认设置门店配送方式 1=配送  2=自提
 * @property integer $customer_type 门店客服类型：1：电话2:企业微信二维码
 * @property integer $home_style 门店首页样式：1：分类商品2:商品筛选
 * @property integer $city_delivery_status 同城配送是否开启：1：开启0:关闭
 * @property integer $city_delivery_type 同城配送类型：0：不配送1：达达2:uu
 * @property integer $delivery_goods_type 同城配送类型：0：不配送1：达达2:uu
 * @property integer $business 支持配送的物品品类
 * @property string $city_shop_id 同城配送门店编码,可自定义,但必须唯一;若不填写,则系统自动生成
 * @property integer $product_status 自主添加商品状态：1：开启0:关闭
 * @property integer $product_verify_status 商品免审核：1：开启0:关闭
 */
trait HasEbSystemStore
{
}
