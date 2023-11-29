<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_member 企业微信成员
 * @property integer $id (主键)
 * @property string $corp_id 企业微信id
 * @property string $userid 成员UserID
 * @property integer $uid 商城uid
 * @property string $name 成员名称
 * @property string $position 职务信息
 * @property string $mobile 手机号码
 * @property integer $gender 性别。0表示未定义，1表示男性，2表示女性
 * @property string $email 邮箱
 * @property string $biz_mail 企业邮箱
 * @property string $direct_leader 直属上级UserID
 * @property string $avatar 头像url
 * @property string $thumb_avatar 头像缩略图url
 * @property string $telephone 座机
 * @property string $alias 别名
 * @property integer $enable 启用/禁用成员。1表示启用成员，0表示禁用成员
 * @property integer $is_leader 是否是领导
 * @property integer $hide_mobile 是否隐藏手机号
 * @property string $address 地址
 * @property string $open_userid 全局唯一
 * @property integer $main_department 主部门
 * @property integer $status 激活状态: 1=已激活，2=已禁用，4=未激活，5=退出企业
 * @property string $qr_code 员工个人二维码
 * @property string $external_position 对外职务
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkMember extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_member';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
