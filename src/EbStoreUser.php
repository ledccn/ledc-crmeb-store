<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_user 门店用户表
 * @property integer $id id(主键)
 * @property integer $store_id 门店id
 * @property integer $uid 平台关联用户uid
 * @property string $label_id 用户标签
 * @property integer $status 状态
 * @property integer $add_time 添加时间
 */
class EbStoreUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_user';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
