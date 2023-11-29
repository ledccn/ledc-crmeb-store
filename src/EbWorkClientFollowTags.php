<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_client_follow_tags 企业微信客户跟踪标签
 * @property integer $follow_id 跟踪人id
 * @property string $group_name 该成员添加此外部联系人所打标签的分组名称
 * @property string $tag_name 该成员添加此外部联系人所打标签名称
 * @property integer $type 1-企业设置，2-用户自定义，3-规则组标签
 * @property string $tag_id 该成员添加此外部联系人所打企业标签的id，用户自定义类型标签（type=2）不返回
 * @property integer $create_time
 */
class EbWorkClientFollowTags extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_client_follow_tags';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
