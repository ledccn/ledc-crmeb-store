<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_enter 商户申请表
 * @property integer $id 商户申请ID(主键)
 * @property integer $uid 用户ID
 * @property string $province 商户所在省
 * @property string $city 商户所在市
 * @property string $district 商户所在区
 * @property string $address 商户详细地址
 * @property string $merchant_name 商户名称
 * @property string $link_user
 * @property string $link_tel 商户电话
 * @property string $charter 商户证书
 * @property integer $add_time 添加时间
 * @property integer $apply_time 审核时间
 * @property integer $success_time 通过时间
 * @property string $fail_message 未通过原因
 * @property integer $fail_time 未通过时间
 * @property integer $status -1 审核未通过 0未审核 1审核通过
 * @property integer $is_lock 0 = 开启 1= 关闭
 * @property integer $is_del 是否删除
 */
trait HasEbUserEnter
{
}
