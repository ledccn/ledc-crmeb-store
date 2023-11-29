<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_notice 用户通知表
 * @property integer $id (主键)
 * @property string $uid 接收消息的用户id（类型：json数据）
 * @property integer $type 消息通知类型（1：系统消息；2：用户通知）
 * @property string $user 发送人
 * @property string $title 通知消息的标题信息
 * @property string $content 通知消息的内容
 * @property integer $add_time 通知消息发送的时间
 * @property integer $is_send 是否发送（0：未发送；1：已发送）
 * @property integer $send_time 发送时间
 */
class EbUserNotice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_notice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
