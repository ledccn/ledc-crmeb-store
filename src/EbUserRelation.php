<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_relation 商品点赞和收藏表
 * @property integer $id (主键)
 * @property integer $uid 用户ID
 * @property integer $relation_id 关联ID
 * @property string $type 类型(收藏(collect）、点赞(like))
 * @property string $category 某种类型的商品(普通商品、秒杀商品)
 * @property integer $add_time 添加时间
 */
class EbUserRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
