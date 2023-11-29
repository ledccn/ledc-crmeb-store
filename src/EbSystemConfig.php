<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_config 配置表
 * @property integer $id 配置id(主键)
 * @property integer $is_store 0=总后台,1=门店
 * @property string $menu_name 字段名称
 * @property string $type 类型(文本框,单选按钮...)
 * @property string $input_type 表单类型
 * @property integer $config_tab_id 配置分类id
 * @property string $parameter 规则 单选框和多选框
 * @property integer $upload_type 上传文件格式1单图2多图3文件
 * @property string $required 规则
 * @property integer $width 多行文本框的宽度
 * @property integer $high 多行文框的高度
 * @property string $value 默认值
 * @property string $info 配置名称
 * @property string $desc 配置简介
 * @property integer $sort 排序
 * @property integer $status 是否隐藏
 */
class EbSystemConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_config';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
