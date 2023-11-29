<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_promotions 优惠活动表
 * @property integer $id (主键)
 * @property integer $pid 同一活动ID
 * @property integer $type 类型：1平台2:门店
 * @property integer $store_id 门店ID
 * @property integer $promotions_type 活动类型：1：限时折扣2:第N件N折3:满减满折4:满送5:活动边框6:活动背景
 * @property integer $promotions_cate 优惠方式1:阶梯2:循环
 * @property string $name 活动名称
 * @property string $title 优惠标题
 * @property string $image 活动图
 * @property string $desc 优惠内容详情
 * @property integer $threshold_type 门槛类型1:满N元2:满N件
 * @property string $threshold 优惠门槛
 * @property integer $discount_type 优惠类型1:满减2:满折
 * @property integer $n_piece_n_discount n件n折类型：1:第二件半件2:买1送1 3:自定义
 * @property string $discount 优惠
 * @property integer $give_integral 赠送积分
 * @property mixed $give_coupon_id 赠送优惠券ID
 * @property mixed $give_product_id 赠送商品ID
 * @property string $give_product_unique 赠送商品规格唯一值
 * @property string $overlay 优惠叠加
 * @property mixed $label_id 关联标签ids
 * @property integer $product_partake_type 参与商品类型：1:全部商品2：指定商品参与3：指定商品不参与
 * @property mixed $product_id 关联商品ids
 * @property integer $system_form_id 系统表单ID
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 * @property integer $is_limit 是否限量:0不限量1限量
 * @property integer $limit_num 限量个数
 * @property integer $start_time 活动开始时间
 * @property integer $stop_time 活动结束时间
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 * @property integer $update_time 最后一次修改时间
 * @property integer $add_time 添加时间
 */
trait HasEbStorePromotions
{
}
