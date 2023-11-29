<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_label 企业微信标签
 * @property integer $id (主键)
 * @property string $corp_id 企业微信id
 * @property integer $group_id 标签组id
 * @property string $group_name 标签组名称
 * @property string $name 标签名称
 * @property integer $sort 排序
 * @property integer $create_time 创建时间
 */
class EbWorkLabel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_label';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
