<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_pink 拼团表
 * @property integer $id (主键)
 * @property integer $uid 用户id
 * @property string $nickname 用户昵称
 * @property string $avatar 用户头像
 * @property string $order_id 订单id 生成
 * @property integer $order_id_key 订单id  数据库
 * @property integer $total_num 购买商品个数
 * @property string $total_price 购买总金额
 * @property integer $cid 拼团商品id
 * @property integer $pid 商品id
 * @property integer $people 拼图总人数
 * @property string $price 拼团商品单价
 * @property string $add_time 开始时间
 * @property string $stop_time
 * @property integer $k_id 团长id 0为团长
 * @property integer $is_tpl 是否发送模板消息0未发送1已发送
 * @property integer $is_refund 是否退款 0未退款 1已退款
 * @property integer $status 状态1进行中2已完成3未完成
 * @property integer $is_virtual 是否虚拟拼团
 */
class EbStorePink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_pink';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
