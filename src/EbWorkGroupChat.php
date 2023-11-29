<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_chat 企业微信群
 * @property integer $id (主键)
 * @property string $corp_id 企业ID
 * @property string $chat_id 客户群ID
 * @property string $name 群名
 * @property string $owner 群主ID
 * @property integer $group_create_time 群的创建时间
 * @property string $notice 群公告
 * @property string $admin_list 群管理员userid
 * @property integer $member_num 群人数
 * @property integer $retreat_group_num 退群总数
 * @property integer $status 客户群跟进状态。
 * 0 - 跟进人正常
 * 1 - 跟进人离职
 * 2 - 离职继承中
 * 3 - 离职继承完成
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkGroupChat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_chat';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
