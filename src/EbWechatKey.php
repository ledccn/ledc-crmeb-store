<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_key 微信回复关键词辅助表
 * @property integer $id (主键)
 * @property integer $reply_id 回复内容id
 * @property string $keys 关键词
 */
class EbWechatKey extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_key';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
