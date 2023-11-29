<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_extract 用户提现表
 * @property integer $id (主键)
 * @property integer $uid
 * @property string $real_name 名称
 * @property string $extract_type bank = 银行卡 alipay = 支付宝wx=微信
 * @property string $bank_code 银行卡
 * @property string $bank_address 开户地址
 * @property string $alipay_code 支付宝账号
 * @property string $extract_price 提现金额
 * @property string $extract_fee 手续费金额
 * @property string $mark
 * @property string $balance
 * @property string $fail_msg 无效原因
 * @property integer $fail_time
 * @property integer $add_time 添加时间
 * @property integer $status -1 未通过 0 审核中 1 已提现
 * @property string $wechat 微信号
 * @property string $qrcode_url 二维码地址
 */
trait HasEbUserExtract
{
}
