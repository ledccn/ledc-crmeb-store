<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_form 系统表单数据表
 * @property integer $id (主键)
 * @property string $version 版本号
 * @property string $name 表单名称
 * @property string $cover_image 封面图
 * @property mixed $value 表单数据
 * @property mixed $default_value 默认数据
 * @property integer $status 是否使用
 * @property integer $is_del 是否删除
 * @property integer $update_time 更新时间
 * @property integer $add_time 添加时间
 */
class EbSystemForm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_form';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
