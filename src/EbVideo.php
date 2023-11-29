<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_video 短视频表
 * @property integer $id (主键)
 * @property integer $type 类型：0:平台1:门店2:用户
 * @property integer $relation_id 关联平台管理门店ID、用户UID
 * @property string $image 封面图
 * @property string $desc 简介
 * @property string $video_url 视频地址
 * @property mixed $product_id 关联商品ids
 * @property integer $like_num 点赞数量
 * @property integer $collect_num 收藏数量
 * @property integer $play_num 浏览播放数量
 * @property integer $comment_num 评论数量
 * @property integer $share_num 分享数量
 * @property integer $is_show 是否显示
 * @property integer $is_recommend 是否推荐
 * @property integer $is_verify 是否审核：-2强制下架-1未通过0未审核1:通过
 * @property integer $sort 排序
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbVideo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_video';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
