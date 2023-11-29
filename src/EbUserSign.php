<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_sign 签到记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property string $title 签到说明
 * @property integer $number 获得积分
 * @property integer $balance 剩余积分
 * @property integer $add_time 添加时间
 */
class EbUserSign extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_sign';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
