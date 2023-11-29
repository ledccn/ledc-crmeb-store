<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_msg_send_result 企业群发记录
 * @property integer $id (主键)
 * @property string $msg_id 消息id
 * @property string $external_userid 外部联系人userid，群发消息到企业的客户群不返回该字段
 * @property string $chat_id 外部客户群id，群发消息到客户不返回该字段
 * @property string $userid 企业服务人员的userid
 * @property integer $status 0-未发送 1-已发送 2-因客户不是好友导致发送失败 3-因客户已经收到其他群发消息导致发送失败
 * @property integer $send_time 发送时间，发送状态为1时返回
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkGroupMsgSendResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_msg_send_result';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
