<?php

namespace Ledc\CrmebStore;

/**
 * eb_video_comment 短视频评价回复表
 * @property integer $id (主键)
 * @property integer $type 类型：0:平台1:门店2:用户
 * @property integer $relation_id 发布视频门店ID、用户UID
 * @property integer $pid 上级回复id
 * @property integer $video_id 视频id
 * @property integer $uid
 * @property string $nickname 用户名称
 * @property string $avatar 用户头像
 * @property integer $like_num 点赞数量
 * @property string $content 评论内容
 * @property string $ip 评论ip
 * @property string $city 城市
 * @property integer $is_reply 是否回复
 * @property integer $is_del 是否删除
 * @property integer $update_time 更新时间
 * @property integer $add_time 创建时间
 */
trait HasEbVideoComment
{
}
