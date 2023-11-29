<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_article 文章管理表
 * @property integer $id 文章管理ID(主键)
 * @property string $cid 分类id
 * @property string $title 文章标题
 * @property string $author 文章作者
 * @property string $image_input 文章图片
 * @property string $synopsis 文章简介
 * @property string $share_title 文章分享标题
 * @property string $share_synopsis 文章分享简介
 * @property string $visit 浏览次数
 * @property integer $sort 排序
 * @property string $url 原文链接
 * @property integer $status 状态
 * @property string $add_time 添加时间
 * @property integer $hide 是否隐藏
 * @property integer $admin_id 管理员id
 * @property integer $mer_id 商户id
 * @property integer $product_id 商品关联id
 * @property integer $is_hot 是否热门(小程序)
 * @property integer $is_banner 是否轮播图(小程序)
 */
class EbArticle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_article';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
