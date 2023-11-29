<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_reply 评论表
 * @property integer $id 评论ID(主键)
 * @property integer $uid 用户ID
 * @property integer $oid 订单ID
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property mixed $unique 唯一id
 * @property integer $product_id 商品id
 * @property string $sku_unique sku唯一值
 * @property string $sku sku名称
 * @property string $reply_type 某种商品类型(普通商品、秒杀商品）
 * @property integer $product_score 商品分数
 * @property integer $service_score 服务分数
 * @property string $comment 评论内容
 * @property string $pics 评论图片
 * @property integer $add_time 评论时间
 * @property integer $praise 点赞
 * @property integer $views_num 浏览量
 * @property string $merchant_reply_content 管理员回复内容
 * @property integer $merchant_reply_time 管理员回复时间
 * @property integer $is_del 0未删除1已删除
 * @property integer $is_reply 0未回复1已回复
 * @property string $nickname 用户名称
 * @property string $avatar 用户头像
 */
class EbStoreProductReply extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_reply';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
