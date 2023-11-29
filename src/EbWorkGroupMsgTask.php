<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_msg_task 群发成员发送任务
 * @property integer $id (主键)
 * @property string $msg_id 消息id
 * @property string $userid 成员id
 * @property integer $status 状态0-未发送 2-已发送
 * @property integer $send_time 发送时间
 * @property integer $create_time 创建时间
 */
class EbWorkGroupMsgTask extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_msg_task';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
