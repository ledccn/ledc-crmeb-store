<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_article_content 文章内容表
 * @property integer $nid 文章id(主键)
 * @property string $content 文章内容
 */
class EbArticleContent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_article_content';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'nid';


}
