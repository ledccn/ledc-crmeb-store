<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_member_other 企业微信成员其他信息
 * @property integer $member_id 企业成员id(主键)
 * @property mixed $extattr 扩展属性
 * @property mixed $external_profile 成员对外属性
 */
class EbWorkMemberOther extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_member_other';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'member_id';


}
