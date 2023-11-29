<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_product_attr_value 商品属性值表
 * @property integer $id (主键)
 * @property integer $type 活动类型 0=商品，1=秒杀，2=砍价，3=拼团，4=积分商品，5=套餐，7=新人专享
 * @property integer $product_id 商品ID
 * @property integer $product_type 商品类型0:普通商品，1：卡密，2：优惠券，3：虚拟商品,4：次卡商品
 * @property string $suk 商品属性索引值 (attr_value|attr_value[|....])
 * @property integer $stock 属性对应的库存
 * @property integer $sum_stock 平台库存+门店库存总和
 * @property integer $sales 销量
 * @property string $price 属性金额
 * @property string $settle_price 结算价
 * @property integer $integral 积分价格
 * @property string $image 图片
 * @property mixed $unique 唯一值
 * @property string $cost 成本价
 * @property string $bar_code 商品条码
 * @property string $ot_price 原价
 * @property string $vip_price 会员专享价
 * @property string $weight 重量
 * @property string $volume 体积
 * @property string $brokerage 一级返佣
 * @property string $brokerage_two 二级返佣
 * @property integer $quota 活动限购数量
 * @property integer $quota_show 活动限购数量显示
 * @property string $code 编码
 * @property mixed $disk_info 虚拟信息内容
 * @property integer $write_times 核销次数
 * @property integer $write_valid 核销时效：1、永久； 2、购买后几天；3、固定
 * @property integer $write_days 购买后：N天有效
 * @property integer $write_start 核销开始时间
 * @property integer $write_end 核销结束时间
 */
class EbStoreProductAttrValue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_product_attr_value';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
