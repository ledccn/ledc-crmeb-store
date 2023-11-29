<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_activity 活动表
 * @property integer $id ID(主键)
 * @property integer $type 1:秒杀
 * @property string $name 活动名称
 * @property string $image 氛围图片
 * @property integer $start_day 开始日期
 * @property integer $end_day 结束日期
 * @property integer $start_time 开始时间
 * @property integer $end_time 结束时间
 * @property mixed $time_id 时间段ID多个
 * @property integer $once_num 活动期间每人每日购买数量，0不限制
 * @property integer $num 全部活动期间，用户购买总数限制，0不限制
 * @property string $discount 优惠方式
 * @property integer $status 是否显示
 * @property integer $is_recommend 是否推荐
 * @property integer $link_id 关联ID
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
trait HasEbStoreActivity
{
}
