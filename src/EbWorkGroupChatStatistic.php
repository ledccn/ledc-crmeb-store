<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_chat_statistic 企业微信群统计
 * @property integer $id (主键)
 * @property integer $group_id 群id
 * @property integer $today_sum 今日新增人员
 * @property integer $today_return_sum 今日退群人员
 * @property integer $chat_sum 当前群人员
 * @property integer $chat_return_sum 当前退群人员
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkGroupChatStatistic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_chat_statistic';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
