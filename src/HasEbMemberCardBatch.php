<?php

namespace Ledc\CrmebStore;

/**
 * eb_member_card_batch 会员卡批次表
 * @property integer $id (主键)
 * @property string $title 批次名称
 * @property integer $total_num 生成卡数量
 * @property integer $use_start_time 体验开始时间
 * @property integer $use_end_time 体验结束时间
 * @property integer $use_day 体验天数
 * @property integer $use_num 使用
 * @property integer $status 是否生效,控制此批次所有卡0：不生效；1：生效
 * @property integer $sort 排序
 * @property string $qrcode 二维码图路径
 * @property string $remark 备注
 * @property integer $add_time
 * @property integer $update_time
 */
trait HasEbMemberCardBatch
{
}
