<?php

namespace Ledc\CrmebStore;

/**
 * eb_user 用户表
 * @property integer $uid 用户id(主键)
 * @property string $account 用户账号
 * @property string $pwd 用户密码
 * @property string $real_name 真实姓名
 * @property integer $birthday 生日
 * @property string $card_id 身份证号码
 * @property string $mark 用户备注
 * @property integer $partner_id 合伙人id
 * @property integer $group_id 用户分组id
 * @property string $nickname 用户昵称
 * @property string $avatar 用户头像
 * @property mixed $phone 手机号码
 * @property integer $add_time 添加时间
 * @property string $add_ip 添加ip
 * @property integer $last_time 最后一次登录时间
 * @property string $last_ip 最后一次登录ip
 * @property string $now_money 用户余额
 * @property string $brokerage_price 佣金金额
 * @property integer $integral 用户剩余积分
 * @property string $exp 会员经验
 * @property integer $sign_num 连续签到天数
 * @property integer $status 1为正常，0为禁止
 * @property integer $level 等级
 * @property integer $agent_level 分销等级
 * @property integer $spread_open 是否有推广资格
 * @property integer $spread_uid 推广元id
 * @property integer $spread_time 推广员关联时间
 * @property integer $spread_lottery 推广获取抽奖次数
 * @property integer $work_uid 绑定企业微信成员uid
 * @property string $work_userid 绑定企业微信成员uid
 * @property string $user_type 用户类型
 * @property integer $is_promoter 是否为推广员
 * @property integer $pay_count 用户购买次数
 * @property integer $spread_count 下级人数
 * @property integer $clean_time 清理会员时间
 * @property string $addres 详细地址
 * @property integer $adminid 管理员编号
 * @property string $login_type 用户登陆类型，h5,wechat,routine
 * @property string $login_city 登录城市
 * @property string $record_phone 记录临时电话
 * @property integer $is_money_level 会员来源  0: 购买商品升级   1：花钱购买的会员2: 会员卡领取
 * @property integer $is_ever_level 是否永久性会员  0: 非永久会员  1：永久会员
 * @property integer $overdue_time 会员到期时间
 * @property string $uniqid
 * @property string $bar_code 条形码值
 * @property integer $rand_code 随机code，用于确认余额支付
 * @property integer $sex 0:其他,1:男,2:女
 * @property string $provincials 省市区
 * @property integer $province 省ID
 * @property integer $city 市ID
 * @property integer $area    区ID
 * @property integer $street 街道ID
 * @property integer $is_del 是否删除
 * @property mixed $delete_time 删除时间
 * @property mixed $extend_info 用户补充信息
 * @property integer $level_status 用户等级是否激活
 * @property mixed $level_extend_info 激活会员卡补充信息
 * @property integer $is_first_order 是否购买首单优惠：0：未购买1已购买
 * @property integer $is_newcomer 是否购买新人专享：0：未购买1已购买
 */
trait HasEbUser
{
}
