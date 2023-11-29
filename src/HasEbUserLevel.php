<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_level 用户等级记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property integer $level_id 等级vip
 * @property integer $grade 会员等级
 * @property integer $valid_time 过期时间
 * @property integer $is_forever 是否永久
 * @property integer $mer_id 商户id
 * @property integer $status 0:禁止,1:正常
 * @property string $mark 备注
 * @property integer $remind 是否已通知
 * @property integer $is_del 是否删除,0=未删除,1=删除
 * @property integer $add_time 添加时间
 * @property integer $discount 享受折扣
 */
trait HasEbUserLevel
{
}
