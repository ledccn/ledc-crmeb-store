<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_article_category 文章分类表
 * @property integer $id 文章分类id(主键)
 * @property integer $pid 父级ID
 * @property string $title 文章分类标题
 * @property string $intr 文章分类简介
 * @property string $image 文章分类图片
 * @property integer $status 状态
 * @property integer $sort 排序
 * @property integer $is_del 1删除0未删除
 * @property string $add_time 添加时间
 * @property integer $hidden 是否隐藏
 */
class EbArticleCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_article_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
