<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_admin 后台管理员表
 * @property integer $id 后台管理员表ID(主键)
 * @property string $account 后台管理员账号
 * @property integer $admin_type 管理员类型 1平台 2门店 4供应商
 * @property integer $relation_id 关联ID
 * @property string $head_pic
 * @property string $pwd 后台管理员密码
 * @property string $real_name 后台管理员姓名
 * @property string $phone 用户电话
 * @property string $roles 后台管理员权限(menus_id)
 * @property string $last_ip 后台管理员最后一次登录ip
 * @property integer $last_time 后台管理员最后一次登录时间
 * @property integer $add_time 后台管理员添加时间
 * @property integer $login_count 登录次数
 * @property integer $level 后台管理员级别
 * @property integer $status 后台管理员状态 1有效0无效
 * @property integer $is_way 图片上传方式 0=本地上传 1=网络图片 2=扫码上传
 * @property integer $is_del
 */
trait HasEbSystemAdmin
{
}
