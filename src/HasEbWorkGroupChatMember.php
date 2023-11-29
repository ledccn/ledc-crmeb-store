<?php

namespace Ledc\CrmebStore;

/**
 * eb_work_group_chat_member 企业微信群成员列表
 * @property integer $id (主键)
 * @property integer $group_id 企业群ID
 * @property string $userid 群成员id
 * @property integer $type 成员类型。
 * 1 - 企业成员
 * 2 - 外部联系人
 * @property string $unionid 微信开放平台的唯一身份标识（微信unionid）
 * @property integer $join_time 入群时间
 * @property integer $join_scene 入群方式。
 * 1 - 由群成员邀请入群（直接邀请入群）
 * 2 - 由群成员邀请入群（通过邀请链接入群）
 * 3 - 通过扫描群二维码入群
 * @property string $invitor_userid 邀请者。目前仅当是由本企业内部成员邀请入群时会返回该值
 * @property string $group_nickname 在群里的昵称
 * @property string $name 名字。仅当 need_name = 1 时返回
 * @property integer $status 1=在群中,0=已退群
 * @property integer $chat_sum 当前群人数
 * @property integer $retreat_chat_num 当前退群人数
 * @property string $state
 * @property integer $create_time 添加时间
 * @property integer $update_time 更新时间
 */
trait HasEbWorkGroupChatMember
{
}
