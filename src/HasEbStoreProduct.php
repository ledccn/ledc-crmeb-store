<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_product 商品表
 * @property integer $id 商品id(主键)
 * @property integer $pid 关联平台商品ID
 * @property integer $type 商品所属：0：平台1:门店2:供应商
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property integer $relation_id 关联门店、供应商ID
 * @property integer $mer_id 商户Id(0为总后台管理员创建,不为0的时候是商户后台创建)
 * @property string $image 商品图片
 * @property string $recommend_image 推荐图
 * @property string $slider_image 轮播图
 * @property string $store_name 商品名称
 * @property string $store_info 商品简介
 * @property string $keyword 关键字
 * @property string $bar_code 商品条码（一维码）
 * @property string $cate_id 分类id
 * @property string $price 商品价格
 * @property string $vip_price 会员价格
 * @property string $ot_price 市场价
 * @property string $postage 邮费
 * @property string $delivery_type 商品配送方式
 * @property integer $freight 运费设置
 * @property string $unit_name 单位名
 * @property integer $sort 排序
 * @property integer $sales 销量
 * @property integer $stock 库存
 * @property integer $show_type 展示：0:所有端1:移动端2:收银台
 * @property integer $is_show 状态（0：未上架，1：上架）
 * @property integer $is_hot 是否热卖
 * @property integer $is_benefit 是否优惠
 * @property integer $is_best 是否精品
 * @property integer $is_new 是否新品
 * @property integer $add_time 添加时间
 * @property integer $is_postage 是否包邮
 * @property integer $is_verify 是否审核：-2强制下架-1未通过0未审核1:通过
 * @property integer $is_del 是否删除
 * @property integer $mer_use 商户是否代理 0不可代理1可代理
 * @property string $give_integral 获得积分
 * @property string $cost 成本价
 * @property integer $is_seckill 秒杀状态 0 未开启 1已开启
 * @property integer $is_bargain 砍价状态 0未开启 1开启
 * @property integer $is_good 是否优品推荐
 * @property integer $is_sub 是否单独分佣
 * @property integer $is_vip 是否开启会员价格
 * @property integer $ficti 虚拟销量
 * @property integer $browse 浏览量
 * @property string $code_path 商品二维码地址(用户小程序海报)
 * @property string $soure_link 淘宝京东1688类型
 * @property integer $video_open 商品视频是否开启
 * @property string $video_link 主图视频链接
 * @property integer $temp_id 运费模板ID
 * @property integer $spec_type 规格 0单 1多
 * @property string $activity 活动显示排序1=秒杀，2=砍价，3=拼团
 * @property mixed $spu 商品SPU
 * @property string $label_id 标签ID
 * @property string $command_word 复制口令
 * @property string $recommend_list 推荐产品
 * @property integer $brand_id 品牌id
 * @property string $brand_com 品牌组合
 * @property string $code 编码
 * @property integer $is_vip_product 是否会员专属商品
 * @property integer $is_presale_product 是否预售商品
 * @property integer $presale_start_time 预售开始时间
 * @property integer $presale_end_time 预售结束时间
 * @property integer $presale_day 预售结束后几天内发货
 * @property integer $auto_on_time 自动上架时间
 * @property integer $auto_off_time 自动下架时间
 * @property mixed $custom_form 自定义表单
 * @property integer $system_form_id 系统表单ID
 * @property integer $applicable_type 适用门店：0：仅平台1：所有2：部分
 * @property mixed $applicable_store_id 适用门店ids
 * @property integer $is_support_refund 是否支持退款
 * @property mixed $store_label_id 商品标签iDS
 * @property mixed $ensure_id 商品保障服务ids
 * @property mixed $specs 商品参数
 * @property integer $specs_id 参数模版ID
 * @property integer $is_limit 是否开启限购
 * @property integer $limit_type 限购类型1单次限购2永久限购
 * @property integer $limit_num 限购数量
 * @property string $refusal 审核拒绝原因
 * @property integer $is_police 是否警告
 * @property integer $is_sold 是否售罄
 */
trait HasEbStoreProduct
{
}
