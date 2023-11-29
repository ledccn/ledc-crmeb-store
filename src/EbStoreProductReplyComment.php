<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_reply_comment 商品评价回复表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $uid
 * @property integer $praise 点赞数量
 * @property string $content 回复内容
 * @property integer $pid 上级回复id
 * @property integer $reply_id 评论id
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbStoreProductReplyComment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_reply_comment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
