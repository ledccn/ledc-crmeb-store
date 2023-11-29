<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_notice_see 用户通知发送记录表
 * @property integer $id (主键)
 * @property integer $nid 查看的通知id
 * @property integer $uid 查看通知的用户id
 * @property integer $add_time 查看通知的时间
 */
class EbUserNoticeSee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_notice_see';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
