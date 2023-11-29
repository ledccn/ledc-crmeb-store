<?php

namespace Ledc\CrmebStore;

/**
 * eb_luck_lottery_record 抽奖记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property integer $oid 订单id
 * @property integer $lottery_id 活动id
 * @property integer $prize_id 奖品id
 * @property integer $type 奖品类型1：未中奖2：积分3:余额4：红包5:优惠券6：站内商品7：等级经验8：用户等级 9：svip天数
 * @property string $prize_info 奖品信息
 * @property integer $is_receive 是否领取
 * @property integer $receive_time 领取时间
 * @property string $receive_info 收获地址、备注等
 * @property integer $is_deliver 是否发货
 * @property integer $deliver_time 发货处理时间
 * @property string $deliver_info 发货单号、备注等
 * @property integer $add_time
 */
trait HasEbLuckLotteryRecord
{
}
