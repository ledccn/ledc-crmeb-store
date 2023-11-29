<?php

namespace Ledc\CrmebStore;

/**
 * eb_luck_prize 抽奖活动奖品表
 * @property integer $id 奖品主键id(主键)
 * @property integer $type 奖品类型1：未中奖2：积分3:余额4：红包5:优惠券6：站内商品7：等级经验8：用户等级 9：svip天数
 * @property integer $lottery_id 抽奖活动id
 * @property string $name 奖品名称
 * @property string $prompt 中奖提示语
 * @property string $image 奖品图片
 * @property integer $chance 中奖基数
 * @property integer $total 奖品数量
 * @property integer $coupon_id 关联优惠券id
 * @property integer $product_id 关联商品id
 * @property string $unique 关联商品规格唯一值
 * @property string $num 积分 经验 会员天数
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 * @property integer $add_time
 */
trait HasEbLuckPrize
{
}
