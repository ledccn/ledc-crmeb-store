<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_table_qrcode 桌码二维码
 * @property integer $id (主键)
 * @property integer $store_id 门店ID
 * @property integer $cate_id 分类ID
 * @property integer $seat_num 座位数
 * @property string $qrcode 二维码
 * @property integer $table_number 桌号
 * @property string $remarks 备注
 * @property integer $is_using 是否启用
 * @property integer $is_use 是否使用
 * @property integer $eat_number 就餐人数
 * @property integer $order_time 下单时间
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbTableQrcode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_table_qrcode';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
