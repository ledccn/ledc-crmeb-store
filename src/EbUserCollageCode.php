<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_collage_code 用户拼单/桌码表
 * @property integer $id (主键)
 * @property integer $uid UID
 * @property integer $type 类别 9=拼单,10=桌码
 * @property integer $oid 订单ID
 * @property integer $store_id 门店id
 * @property integer $checkout_method 结账方式
 * @property integer $qrcode_id 二维码ID
 * @property integer $number_diners 用餐人数
 * @property string $serial_number 流水号
 * @property integer $address_id 地址id
 * @property integer $shipping_type 配送方式 1=快递,2=到店自提,3=门店配送
 * @property integer $status 状态 0=下单中 1=结算中 2=提交成功 3=已完成 -1=取消拼单/桌码
 * @property integer $add_time 添加时间
 */
class EbUserCollageCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_collage_code';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
