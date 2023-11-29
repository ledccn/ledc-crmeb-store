<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_discounts 组合套餐表
 * @property integer $id 自增ID(主键)
 * @property string $title 套餐名称
 * @property string $image 组合套餐主图
 * @property integer $type 套餐类型0固定1搭配
 * @property integer $is_limit 是否限量0不限量1限量
 * @property integer $limit_num 限量个数
 * @property string $link_ids 关联标签
 * @property string $product_ids 商品IDS
 * @property integer $is_time 是否限时0不限时1限时
 * @property integer $start_time 开始时间
 * @property integer $stop_time 结束时间
 * @property integer $sort 排序
 * @property integer $add_time 添加时间
 * @property integer $free_shipping 是否包邮0不包邮1包邮
 * @property integer $status 是否上架0不上架1上架
 * @property integer $is_del 是否删除0未删除1已删除
 * @property integer $is_support_refund 是否支持退款
 * @property string $delivery_type 物流类型
 * @property integer $freight 运费设置
 * @property mixed $custom_form 自定义表单
 */
trait HasEbStoreDiscounts
{
}
