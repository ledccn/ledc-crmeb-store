<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_template 企业微信群发
 * @property integer $id (主键)
 * @property integer $type 0=客户群发，1=客户群群发
 * @property string $name 名称
 * @property string $userids 成员userid
 * @property integer $client_type 0=全部客户，1=筛选客户
 * @property string $where_time 筛选时间
 * @property string $where_label 筛选标签
 * @property string $where_not_label 筛选排除标签
 * @property integer $template_type 0=立即发送，1=定时发送
 * @property integer $send_time 定时发送时间
 * @property integer $send_type 是否发送1=已发送，2=正在发送中，0=没有发送
 * @property string $welcome_words 群发内容
 * @property string $fail_external_userid 发送失败的客户userid
 * @property string $fail_message 发送失败原因
 * @property integer $create_time
 * @property integer $update_time
 */
class EbWorkGroupTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_template';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
