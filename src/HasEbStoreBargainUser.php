<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_bargain_user 用户参与砍价表
 * @property integer $id 用户参与砍价表ID(主键)
 * @property integer $uid 用户ID
 * @property integer $bargain_id 砍价商品id
 * @property string $bargain_price_min 砍价的最低价
 * @property string $bargain_price 砍价金额
 * @property string $price 砍掉的价格
 * @property integer $status 状态 1参与中 2 活动结束参与失败 3活动结束参与成功
 * @property integer $add_time 参与时间
 * @property integer $is_del 是否取消
 */
trait HasEbStoreBargainUser
{
}
