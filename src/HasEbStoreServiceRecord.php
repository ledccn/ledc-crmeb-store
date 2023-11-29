<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_service_record 客服聊天用户记录表
 * @property integer $id (主键)
 * @property integer $user_id 发送人的uid
 * @property integer $to_uid 送达人的uid
 * @property string $nickname 用户昵称
 * @property string $avatar 用户头像
 * @property integer $is_tourist 是否是游客
 * @property integer $online 是否在线
 * @property integer $type 0 = pc,1=微信，2=小程序，3=H5
 * @property integer $add_time 添加时间
 * @property integer $update_time 更新时间
 * @property integer $mssage_num 消息条数
 * @property string $message 内容
 * @property integer $message_type
 */
trait HasEbStoreServiceRecord
{
}
