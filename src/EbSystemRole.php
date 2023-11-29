<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_role 身份管理表
 * @property integer $id 身份管理id(主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $role_name 身份管理名称
 * @property mixed $rules 身份管理权限(menus_id)
 * @property mixed $cashier_rules 门店角色管理收银台权限(menus_id)
 * @property integer $level
 * @property integer $status 状态
 */
class EbSystemRole extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_role';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
