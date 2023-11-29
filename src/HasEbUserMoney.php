<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_money 用户账单表
 * @property integer $id 用户余额id(主键)
 * @property integer $uid 用户uid
 * @property string $link_id 关联id
 * @property string $type 明细类型
 * @property string $title 账单标题
 * @property string $number 明细数字
 * @property string $balance 剩余
 * @property integer $pm 0 = 支出 1 = 获得
 * @property string $mark 备注
 * @property integer $status 0 = 带确定 1 = 有效 -1 = 无效
 * @property integer $add_time 添加时间
 */
trait HasEbUserMoney
{
}