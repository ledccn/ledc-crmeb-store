<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_notification 通知设置
 * @property integer $id (主键)
 * @property string $mark 标识
 * @property string $name 通知类型
 * @property string $title 通知场景说明
 * @property integer $is_system 站内信（0：不存在，1：开启，2：关闭）
 * @property integer $is_app APP推送（0：不存在，1：开启，2：关闭）
 * @property integer $is_wechat 公众号模板消息（0：不存在，1：开启，2：关闭）
 * @property integer $is_routine 小程序订阅消息（0：不存在，1：开启，2：关闭）
 * @property integer $is_sms 发送短信（0：不存在，1：开启，2：关闭）
 * @property integer $is_ent_wechat 企业微信群通知（0：不存在，1：开启，2：关闭）
 * @property string $system_title 站内信标题
 * @property string $system_text 系统消息id
 * @property integer $app_id app推送id
 * @property string $wechat_id 模板消息id
 * @property string $routine_id 订阅消息id
 * @property integer $sms_id 短信id
 * @property string $ent_wechat_text 企业微信消息
 * @property string $variable 变量
 * @property string $url 群机器人链接
 * @property integer $type 类型（1：用户，2：管理员）
 * @property integer $add_time 添加时间
 */
trait HasEbSystemNotification
{
}
