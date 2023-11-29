<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_notice_admin 通知记录表
 * @property integer $id 通知记录ID(主键)
 * @property string $notice_type 通知类型
 * @property integer $admin_id 通知的管理员
 * @property integer $link_id 关联ID
 * @property string $table_data 通知的数据
 * @property integer $is_click 点击次数
 * @property integer $is_visit 访问次数
 * @property integer $visit_time 访问时间
 * @property integer $add_time 通知时间
 */
trait HasEbSystemNoticeAdmin
{
}
