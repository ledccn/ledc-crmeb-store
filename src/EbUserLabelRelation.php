<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_label_relation 用户标签关联表
 * @property integer $id (主键)
 * @property integer $uid 用户ID
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $label_id 标签ID
 */
class EbUserLabelRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_label_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
