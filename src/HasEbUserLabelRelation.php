<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_label_relation 用户标签关联表
 * @property integer $id (主键)
 * @property integer $uid 用户ID
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $label_id 标签ID
 */
trait HasEbUserLabelRelation
{
}
