<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_member_card 会员卡表
 * @property integer $id (主键)
 * @property integer $card_batch_id 卡批次id(主键)
 * @property string $card_number 卡号
 * @property mixed $card_password 密码
 * @property integer $use_uid 使用用户
 * @property integer $use_time 使用时间
 * @property integer $status 卡状态：0：冻结；1：激活
 * @property integer $add_time
 * @property integer $update_time
 */
class EbMemberCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_member_card';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'card_batch_id';


}
