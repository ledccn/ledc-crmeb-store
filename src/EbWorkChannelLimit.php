<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_channel_limit 渠道码添加成员限制器
 * @property integer $channel_id 渠道码id
 * @property string $userid 成员userid
 * @property integer $max 限制个数
 */
class EbWorkChannelLimit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_channel_limit';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
