<?php

namespace Ledc\CrmebStore;

/**
 * eb_luck_lottery 抽奖活动表
 * @property integer $id (主键)
 * @property integer $type 抽奖类型1:九宫格2：大转盘3：九宫格升级版 4：幸运翻牌
 * @property string $name 抽奖活动名称
 * @property string $desc 活动描述
 * @property string $image 活动背景图
 * @property integer $factor 抽奖消耗：1:积分2：余额3：下单支付成功4：订单评价5：关注公众号
 * @property integer $factor_num 获取一次抽奖的条件数量
 * @property integer $attends_user 参与用户1：所有2：部分
 * @property string $user_level 参与用户等级
 * @property string $user_label 参与用户标签
 * @property integer $is_svip 参与用户是否付费会员
 * @property integer $prize_num 奖品数量
 * @property integer $start_time 开始时间
 * @property integer $end_time 结束时间
 * @property integer $lottery_num_term 抽奖次数限制：1：每天2：每人
 * @property integer $lottery_num 抽奖次数
 * @property integer $total_lottery_num 积分抽奖总次数
 * @property integer $spread_num 关注推广获取抽奖次数
 * @property integer $is_all_record 中奖纪录展示
 * @property integer $is_personal_record 个人中奖纪录展示
 * @property integer $is_content 活动规格是否展示
 * @property mixed $content 活动文案抽奖协议之类
 * @property integer $status 状态
 * @property integer $sort 排序
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
trait HasEbLuckLottery
{
}
