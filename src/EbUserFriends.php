<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_friends 用户好友关系
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property integer $friends_uid 好友uid
 * @property integer $add_time 添加时间
 */
class EbUserFriends extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_friends';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
