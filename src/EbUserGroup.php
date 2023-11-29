<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_group 用户分组表
 * @property integer $id (主键)
 * @property string $group_name 用户分组名称
 */
class EbUserGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_group';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
