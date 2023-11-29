<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_message 用户行为记录表
 * @property integer $id 用户行为记录id(主键)
 * @property string $openid 用户openid
 * @property string $type 操作类型
 * @property string $result 操作详细记录
 * @property integer $add_time 操作时间
 */
class EbWechatMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_message';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
