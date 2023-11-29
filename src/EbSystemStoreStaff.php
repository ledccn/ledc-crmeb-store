<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_store_staff 门店店员表
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $uid 微信用户id
 * @property string $account 账号
 * @property string $pwd 密码
 * @property string $avatar 店员头像
 * @property string $staff_name 店员名称
 * @property mixed $phone 手机号码
 * @property string $roles 管理权限
 * @property string $last_ip 最后一次登录ip
 * @property integer $last_time 最后一次登录时间
 * @property integer $login_count 登录次数
 * @property integer $level 级别
 * @property integer $verify_status 核销开关
 * @property integer $order_status 订单管理
 * @property integer $is_admin 是否是管理员
 * @property integer $is_store 是否是店员
 * @property integer $is_manager 是否是店长
 * @property integer $is_cashier 是否收银员1=是，0=否
 * @property integer $is_customer 是否是客服
 * @property string $customer_phone 客服手机
 * @property string $customer_url 客服二维码地址
 * @property integer $status 状态
 * @property integer $notify 订单通知1开启0关闭
 * @property integer $is_way 图片上传方式 0=本地上传 1=网络图片 2=扫码上传
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbSystemStoreStaff extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_store_staff';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
