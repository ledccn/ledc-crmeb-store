<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_live_goods 直播商品表
 * @property integer $id (主键)
 * @property integer $goods_id 微信商品ID
 * @property integer $audit_id 审核ID
 * @property integer $product_id 商品id
 * @property string $name 商品名称
 * @property string $cover_img 商品图片链接
 * @property string $url 商品小程序链接
 * @property integer $price_type 价格类型（1:一口价，此时读price字段; 2:价格区间，此时price字段为左边界，price2字段为右边界; 3:折扣价，此时price字段为原价，price2字段为现价；）
 * @property string $cost_price 
 * @property string $price 
 * @property string $price2 
 * @property integer $audit_status 审核状态（0：未审核，1：审核中，2:审核通过，3审核失败）
 * @property integer $third_part_tag 1、2：表示是为 API 添加商品，否则是直播控制台添加的商品
 * @property integer $sort 
 * @property integer $is_show 是否显示
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbLiveGoods extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_live_goods';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
