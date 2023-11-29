<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_out_account 对外接口账号
 * @property integer $id (主键)
 * @property string $appid 账号
 * @property string $appsecret 密钥
 * @property string $title 描述
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 * @property integer $last_time 最后一次登录时间
 * @property string $ip IP
 * @property integer $is_del
 */
class EbOutAccount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_out_account';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
