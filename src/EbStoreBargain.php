<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_bargain 砍价表
 * @property integer $id 砍价商品ID(主键)
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_id 关联商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property string $title 砍价活动名称
 * @property string $image 砍价活动图片
 * @property string $unit_name 单位名称
 * @property integer $stock 库存
 * @property integer $sales 销量
 * @property string $images 砍价商品轮播图
 * @property integer $start_time 砍价开启时间
 * @property integer $stop_time 砍价结束时间
 * @property string $store_name 砍价商品名称
 * @property string $price 砍价金额
 * @property string $min_price 砍价商品最低价
 * @property integer $num 可购买砍价商品数量
 * @property string $bargain_max_price 用户每次砍价的最大金额
 * @property string $bargain_min_price 用户每次砍价的最小金额
 * @property integer $bargain_num 用户帮砍的次数
 * @property integer $status 砍价状态 0(到砍价时间不自动开启)  1(到砍价时间自动开启时间)
 * @property string $give_integral 反多少积分
 * @property string $info 砍价活动简介
 * @property string $cost 成本价
 * @property integer $sort 排序
 * @property integer $is_hot 是否推荐0不推荐1推荐
 * @property integer $is_del 是否删除 0未删除 1删除
 * @property integer $add_time 添加时间
 * @property integer $is_postage 是否包邮 0不包邮 1包邮
 * @property string $postage 邮费
 * @property string $rule 砍价规则
 * @property integer $look 砍价商品浏览量
 * @property integer $share 砍价商品分享量
 * @property integer $temp_id 运费模板ID
 * @property string $weight 重量
 * @property string $volume 体积
 * @property integer $quota 限购总数
 * @property integer $quota_show 限量总数显示
 * @property integer $people_num 用户帮砍的次数
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
class EbStoreBargain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_bargain';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
