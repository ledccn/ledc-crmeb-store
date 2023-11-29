<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_menus 菜单表
 * @property integer $id 菜单ID(主键)
 * @property integer $pid 父级id
 * @property integer $type 菜单类型1:平台2:门店
 * @property string $icon 图标
 * @property string $menu_name 按钮名
 * @property string $module 模块名
 * @property string $controller 控制器
 * @property string $action 方法名
 * @property string $api_url api接口地址
 * @property string $methods 提交方式POST GET PUT DELETE
 * @property string $params 参数
 * @property integer $sort 排序
 * @property integer $is_show 是否为隐藏菜单0=隐藏菜单,1=显示菜单
 * @property integer $is_show_path 是否为隐藏菜单供前台使用
 * @property integer $access 子管理员是否可用
 * @property string $menu_path 路由名称 前端使用
 * @property string $path 路径
 * @property integer $auth_type 是否为菜单 1菜单 2功能
 * @property string $header 顶部菜单标示
 * @property integer $is_header 是否顶部菜单1是0否
 * @property string $unique_auth 前台唯一标识
 * @property integer $is_del 是否删除
 */
class EbSystemMenus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_menus';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
