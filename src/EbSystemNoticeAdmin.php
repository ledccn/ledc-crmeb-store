<?php

namespace Ledc\CrmebStore;

use think\Model;

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
class EbSystemNoticeAdmin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_notice_admin';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
