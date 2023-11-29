<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_visit 用户访问表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property string $url 访问路径
 * @property string $ip 用户ip
 * @property integer $stay_time 页面停留时间(秒)
 * @property integer $add_time 访问时间
 * @property string $channel_type 用户访问端标识
 * @property string $province 用户省份
 */
trait HasEbUserVisit
{
}
