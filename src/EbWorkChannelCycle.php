<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_channel_cycle 渠道码周期规则
 * @property integer $channel_id 渠道码
 * @property string $userids 成员userid
 * @property string $start_time 上班开始
 * @property string $end_time 上班结束
 * @property string $wokr_time 工作周期，json转换
 */
class EbWorkChannelCycle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_channel_cycle';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
