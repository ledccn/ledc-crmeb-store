<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_diy DIY数据表
 * @property integer $id (主键)
 * @property string $version 版本号
 * @property string $name 页面名称
 * @property string $title 网站标题
 * @property string $cover_image 封面图
 * @property string $template_name 模板名称
 * @property mixed $value 页面数据
 * @property mixed $default_value 默认数据
 * @property integer $add_time 添加时间
 * @property integer $update_time 更新时间
 * @property integer $status 是否使用
 * @property integer $type 页面类型
 * @property integer $is_show 显示首页
 * @property integer $is_bg_color 颜色是否选中
 * @property integer $is_bg_pic 背景图是否选中
 * @property integer $is_diy 是否是diy数据
 * @property string $color_picker 背景颜色
 * @property string $bg_pic 背景图
 * @property integer $bg_tab_val 背景图图片样式
 * @property integer $is_del 是否删除
 * @property integer $order_status 个人中心订单样式
 * @property integer $my_banner_status 个人中心banner是否显示
 * @property integer $menu_status 个人中心菜单样式
 * @property integer $service_status 商家样式
 */
class EbDiy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_diy';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
