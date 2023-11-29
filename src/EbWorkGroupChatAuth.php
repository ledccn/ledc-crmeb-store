<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_chat_auth 企业微信自动拉群
 * @property integer $id (主键)
 * @property string $name 二维码名称
 * @property integer $auth_group_chat 自动建群0=关闭，1=开启
 * @property string $chat_id 群聊chat_id
 * @property string $group_name 群名称
 * @property integer $group_num 群序列号
 * @property string $label 客户标签
 * @property string $config_id 配置id
 * @property string $qr_code 联系二维码的UR
 * @property integer $create_time 创建
 * @property integer $update_time 更新
 * @property integer $delete_time 删除
 */
class EbWorkGroupChatAuth extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_chat_auth';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
