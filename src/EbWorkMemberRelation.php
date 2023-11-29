<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_member_relation 企业成员关联表
 * @property integer $member_id 员工ID
 * @property integer $department 所属部门
 * @property integer $srot 排序
 * @property integer $is_leader_in_dept 是否为部门负责人
 * @property integer $create_time 创建时间
 */
class EbWorkMemberRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_member_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
