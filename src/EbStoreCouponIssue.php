<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_coupon_issue 优惠券前台领取表
 * @property integer $id (主键)
 * @property integer $cid 优惠券ID
 * @property integer $type 优惠券类型 0-通用 1-品类券 2-商品券 3-品牌
 * @property integer $receive_type 1 手动领取，3赠送券
 * @property integer $coupon_type 1:满减券2:折扣券
 * @property string $coupon_title 优惠券名称
 * @property integer $start_time 优惠券领取开启时间
 * @property integer $end_time 优惠券领取结束时间
 * @property integer $total_count 优惠券领取数量
 * @property integer $remain_count 优惠券剩余领取数量
 * @property integer $is_permanent 是否无限张数
 * @property integer $status 1 正常 0 未开启 -1 已无效
 * @property integer $is_give_subscribe 是否首次关注赠送 0-否(默认) 1-是
 * @property integer $is_full_give 是否满赠0-否(默认) 1-是
 * @property string $full_reduction 消费满多少赠送优惠券
 * @property integer $is_del 
 * @property integer $add_time 优惠券添加时间
 * @property string $title 优惠券名称
 * @property integer $integral 兑换消耗积分值
 * @property string $coupon_price 兑换的优惠券面值
 * @property string $use_min_price 最低消费多少金额可用优惠券
 * @property integer $coupon_time 优惠券有效期限（单位：天）
 * @property string $product_id 所属商品id
 * @property integer $category_id 分类id
 * @property integer $brand_id 品牌ID
 * @property integer $start_use_time 优惠券使用开始时间
 * @property integer $end_use_time 优惠券使用结束时间
 * @property integer $sort 排序
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 */
class EbStoreCouponIssue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_coupon_issue';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
