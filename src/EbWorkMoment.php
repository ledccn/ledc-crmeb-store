<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_moment 企业微信发送朋友圈
 * @property integer $id (主键)
 * @property string $name 任务名称
 * @property integer $type 0=全部成员，1=选择成员
 * @property string $user_ids 成员userid
 * @property integer $client_type 客户类型0=全部，1=筛选
 * @property string $client_tag_list 客户标签
 * @property string $welcome_words 内容
 * @property integer $send_type 发送类型
 * @property integer $send_time 定时发送时间
 * @property string $jobid 任务id
 * @property string $invalid_sender_list 不合法的执行者列表，包括不存在的id以及不在应用可见范围内的部门或者成员
 * @property string $moment_id 朋友圈id
 * @property string $invalid_external_contact_list 无效客户
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkMoment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_moment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
