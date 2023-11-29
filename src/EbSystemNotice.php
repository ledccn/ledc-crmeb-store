<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_notice 通知模板表
 * @property integer $id 通知模板id(主键)
 * @property string $title 通知标题
 * @property string $type 通知类型
 * @property string $icon 图标
 * @property string $url 链接
 * @property string $table_title 通知数据
 * @property string $template 通知模板
 * @property string $push_admin 通知管理员id
 * @property integer $status 状态
 */
class EbSystemNotice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_notice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
