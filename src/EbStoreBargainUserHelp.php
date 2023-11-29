<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_bargain_user_help 砍价用户帮助表
 * @property integer $id 砍价用户帮助表ID(主键)
 * @property integer $uid 帮助的用户id
 * @property integer $bargain_id 砍价商品ID
 * @property integer $bargain_user_id 用户参与砍价表id
 * @property string $price 帮助砍价多少金额
 * @property integer $add_time 添加时间
 * @property integer $type 是否自己砍价
 */
class EbStoreBargainUserHelp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_bargain_user_help';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
