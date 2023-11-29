<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_news_category 图文消息管理表
 * @property integer $id 图文消息管理ID(主键)
 * @property string $cate_name 图文名称
 * @property integer $sort 排序
 * @property integer $status 状态
 * @property string $new_id 文章id
 * @property string $add_time 添加时间
 */
class EbWechatNewsCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_news_category';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
