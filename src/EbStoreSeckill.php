<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_seckill 商品秒杀商品表
 * @property integer $id 商品秒杀商品表id(主键)
 * @property integer $activity_id 活动ID
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_id 商品id
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $image 推荐图
 * @property string $images 轮播图
 * @property string $title 活动标题
 * @property string $info 简介
 * @property string $price 价格
 * @property string $cost 成本
 * @property string $ot_price 原价
 * @property string $give_integral 返多少积分
 * @property integer $sort 排序
 * @property integer $stock 库存
 * @property integer $sales 销量
 * @property string $unit_name 单位名
 * @property string $postage 邮费
 * @property string $description 内容
 * @property string $start_time 开始时间
 * @property string $stop_time 结束时间
 * @property string $add_time 添加时间
 * @property integer $status 商品状态
 * @property integer $is_postage 是否包邮
 * @property integer $is_hot 热门推荐
 * @property integer $is_del 删除 0未删除1已删除
 * @property integer $num 最多秒杀几个
 * @property integer $is_show 显示
 * @property mixed $time_id 时间段ID，多个
 * @property integer $temp_id 运费模板ID
 * @property string $weight 商品重量
 * @property string $volume 商品体积
 * @property integer $quota 限购总数
 * @property integer $quota_show 限购总数显示
 * @property integer $once_num 单次购买个数
 * @property integer $is_support_refund 是否支持退款
 * @property string $delivery_type 物流类型
 * @property integer $freight 运费设置
 * @property mixed $custom_form 自定义表单
 * @property integer $system_form_id 系统表单ID
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 * @property mixed $store_label_id 商品标签iDS
 * @property mixed $ensure_id 商品保障服务ids
 * @property mixed $specs 商品参数
 */
class EbStoreSeckill extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_seckill';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
