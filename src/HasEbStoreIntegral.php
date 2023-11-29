<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_integral 积分商品表
 * @property integer $id 积分商品ID(主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_id 商品id
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $image 商品图片
 * @property string $images 轮播图
 * @property string $title 活动标题
 * @property string $price 价格
 * @property integer $integral 积分价格
 * @property integer $sort 排序
 * @property integer $sales 销量
 * @property string $unit_name 单位名
 * @property integer $stock 库存
 * @property string $add_time 添加时间
 * @property integer $is_host 推荐
 * @property integer $is_show 商品状态
 * @property integer $is_del 删除
 * @property integer $num 最多积分几个
 * @property integer $quota 限购总数
 * @property integer $once_num 单次购买个数
 * @property integer $quota_show
 * @property string $delivery_type 物流类型
 * @property integer $freight 运费设置1：包邮，2：固定运费，3：运费模版
 * @property mixed $custom_form 自定义表单
 * @property integer $system_form_id 系统表单ID
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 * @property mixed $store_label_id 商品标签iDS
 * @property mixed $ensure_id 商品保障服务ids
 * @property mixed $specs 商品参数
 */
trait HasEbStoreIntegral
{
}
