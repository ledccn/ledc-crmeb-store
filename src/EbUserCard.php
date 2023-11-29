<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_card 用户领取卡券
 * @property integer $id (主键)
 * @property integer $uid UID
 * @property integer $spread_uid 推广用户uid
 * @property integer $wechat_card_id wechat_card表主键
 * @property string $card_id card_id
 * @property string $code 会员卡号
 * @property integer $store_id 门店ID
 * @property integer $staff_id 店员ID
 * @property string $openid 微信openid
 * @property integer $is_submit 是否激活
 * @property integer $submit_time 激活时间
 * @property integer $is_del 是否删除
 * @property integer $del_time 删除时间
 * @property integer $add_time 添加时间
 */
class EbUserCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_card';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
