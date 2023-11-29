<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_service 客服表
 * @property integer $id 客服id(主键)
 * @property integer $mer_id 商户id
 * @property integer $uid 客服uid
 * @property integer $online 是否在线
 * @property string $account 账号
 * @property string $password 密码
 * @property string $avatar 客服头像
 * @property string $nickname 代理名称
 * @property string $phone 客服电话
 * @property integer $add_time 添加时间
 * @property integer $account_status 账号状态,0隐藏1显示
 * @property integer $status 客服状态，0隐藏1显示
 * @property integer $notify 订单通知1开启0关闭
 * @property integer $customer 是否展示统计管理
 * @property string $uniqid 
 * @property integer $is_del 是否删除
 */
class EbStoreService extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_service';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
