<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_live_room 直播间表
 * @property integer $id (主键)
 * @property integer $room_id 直播间 id
 * @property string $name 直播间名字
 * @property string $cover_img 背景图
 * @property string $share_img 分享图
 * @property integer $start_time 直播计划开始时间
 * @property integer $end_time 直播计划结束时间
 * @property string $anchor_name 主播昵称
 * @property string $anchor_wechat 主播微信号
 * @property string $phone 主播手机号(主键)
 * @property integer $type 直播间类型 【1: 推流，0：手机直播】
 * @property integer $screen_type 横屏、竖屏 【1：横屏，0：竖屏】
 * @property integer $close_like 是否关闭点赞
 * @property integer $close_goods 是否关闭货架
 * @property integer $close_comment 是否关闭评论
 * @property string $error_msg 未通过原因
 * @property integer $status 审核状态0=未审核1=微信审核2=审核通过-1=审核未通过
 * @property integer $live_status 直播状态101：直播中，102：未开始，103已结束，104禁播，105：暂停，106：异常，107：已过期
 * @property string $mark 备注
 * @property integer $replay_status 回放状态
 * @property integer $sort
 * @property integer $is_show 是否显示
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbLiveRoom extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_live_room';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'phone';


}
