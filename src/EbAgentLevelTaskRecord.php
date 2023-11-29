<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_agent_level_task_record 分销员完成等级任务表记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property integer $level_id 等级id
 * @property integer $task_id 任务id
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
class EbAgentLevelTaskRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_agent_level_task_record';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
