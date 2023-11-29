<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_group_msg_relation 企业群发消息id关联表
 * @property integer $template_id 群发模板id
 * @property string $msg_id 群发消息id
 */
class EbWorkGroupMsgRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_group_msg_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
