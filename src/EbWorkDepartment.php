<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_department 企业微信部门
 * @property integer $id (主键)
 * @property string $corp_id 企业id
 * @property integer $department_id 部门id
 * @property string $name 部门名称
 * @property string $name_en 部门英文名称
 * @property string $department_leader leader
 * @property integer $parentid 上级id
 * @property integer $srot 排序
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkDepartment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_department';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
