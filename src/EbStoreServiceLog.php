<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_service_log 客服用户对话记录表
 * @property integer $id 客服用户对话记录表ID(主键)
 * @property integer $mer_id 商户id
 * @property string $msn 消息内容
 * @property integer $uid 发送人uid
 * @property integer $to_uid 接收人uid
 * @property integer $is_tourist 1=游客模式，0=非游客
 * @property integer $time_node 时间节点
 * @property integer $add_time 发送时间
 * @property integer $type 是否已读（0：否；1：是；）
 * @property integer $remind 是否提醒过
 * @property integer $msn_type 消息类型 1=文字 2=表情 3=图片 4=语音
 */
class EbStoreServiceLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_service_log';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
