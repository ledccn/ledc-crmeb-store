<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_client 企业微信客户
 * @property integer $id (主键)
 * @property string $corp_id 企业微信id
 * @property string $external_userid 外部联系人的userid
 * @property integer $uid 商城用户uid
 * @property string $name 外部联系人的名称
 * @property string $avatar 外部联系人头像
 * @property integer $type 1表示该外部联系人是微信用户，2表示该外部联系人是企业微信用户
 * @property integer $gender 性别 0-未知 1-男性 2-女性
 * @property string $unionid 开放平台的唯一身份标识
 * @property string $position 外部联系人的职位
 * @property string $corp_name 外部联系人所在企业的简称
 * @property string $corp_full_name 外部联系人所在企业的主体名称
 * @property string $external_profile
 * @property string $remark 备注信息
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $delete_time 删除时间戳
 */
class EbWorkClient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_client';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
