<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_reply 微信关键字回复表
 * @property integer $id 微信关键字回复id(主键)
 * @property string $type 回复类型
 * @property string $data 回复数据
 * @property integer $status 0=不可用  1 =可用
 * @property integer $hide 是否隐藏
 */
class EbWechatReply extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_reply';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
