<?php

namespace Ledc\CrmebStore;

/**
 * eb_agent_level_task 分销员等级任务表
 * @property integer $id (主键)
 * @property integer $level_id 分销等级id
 * @property string $name 任务名称
 * @property integer $type 任务类型
 * @property integer $number 任务限定数
 * @property string $desc 任务描述
 * @property integer $is_must 是否必须达成0:其一1:所有
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
trait HasEbAgentLevelTask
{
}
