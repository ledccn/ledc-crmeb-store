<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_moment_send_result 企业微信朋友圈发送情况
 * @property integer $id (主键)
 * @property string $moment_id 朋友圈id
 * @property string $user_id 成员id
 * @property string $external_userid 客户ids
 * @property integer $status 发送状态
 * @property integer $create_time 创建时间
 */
class EbWorkMomentSendResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_moment_send_result';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
