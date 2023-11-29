<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_invoice 用户发票管理表
 * @property integer $id (主键)
 * @property integer $uid 
 * @property integer $header_type 抬头类型1:个人2：企业
 * @property integer $type 发票类型1：普通2：专用
 * @property string $name 名称（发票抬头）
 * @property string $duty_number 税号
 * @property string $drawer_phone 开票人手机号
 * @property string $email 开票人邮箱
 * @property string $tell 注册电话
 * @property string $address 注册地址
 * @property string $bank 注册开户银行
 * @property string $card_number 银行卡号
 * @property integer $is_default 是否默认
 * @property integer $is_del 
 * @property integer $add_time
 */
class EbUserInvoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_invoice';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
