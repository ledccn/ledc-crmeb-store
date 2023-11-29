<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_combination 拼团商品表
 * @property integer $id (主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_id 商品id
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property integer $mer_id 商户id
 * @property string $image 推荐图
 * @property string $images 轮播图
 * @property string $title 活动标题
 * @property string $attr 活动属性
 * @property integer $people 参团人数
 * @property string $info 简介
 * @property string $price 价格
 * @property integer $sort 排序
 * @property integer $sales 销量
 * @property integer $stock 库存
 * @property string $add_time 添加时间
 * @property integer $is_host 推荐
 * @property integer $is_show 商品状态
 * @property integer $is_del
 * @property integer $combination
 * @property integer $mer_use 商户是否可用1可用0不可用
 * @property integer $is_postage 是否包邮1是0否
 * @property string $postage 邮费
 * @property integer $start_time 拼团开始时间
 * @property integer $stop_time 拼团结束时间
 * @property integer $effective_time 拼团订单有效时间
 * @property integer $cost 拼图商品成本
 * @property integer $browse 浏览量
 * @property string $unit_name 单位名
 * @property integer $temp_id 运费模板ID
 * @property string $weight 重量
 * @property string $volume 体积
 * @property integer $num 单次购买数量
 * @property integer $once_num 每个订单可购买数量
 * @property integer $quota 限购总数
 * @property integer $quota_show 限量总数显示
 * @property integer $virtual 虚拟成团百分比
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
class EbStoreCombination extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_combination';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
