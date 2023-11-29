<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_message 系统通知
 * @property integer $id (主键)
 * @property string $mark 标识
 * @property integer $uid 用户ID
 * @property string $title 通知标题
 * @property string $content 通知内容
 * @property integer $look 是否查看
 * @property integer $type 1:普通用户，2：管理员
 * @property integer $add_time 通知时间
 * @property integer $is_del 是否删除
 */
class EbSystemMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_message';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
