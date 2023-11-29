<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_spread 用户推广关系表
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $uid 用户uid
 * @property integer $staff_id 店员ID
 * @property integer $spread_uid 推广人uid
 * @property integer $spread_time 推广时间
 * @property integer $admin_id 管理员id
 */
class EbUserSpread extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_spread';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
