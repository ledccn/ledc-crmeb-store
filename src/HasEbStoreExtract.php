<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_extract 门店提现表
 * @property integer $id (主键)
 * @property integer $store_id 门店ID
 * @property integer $store_staff_id 门店店员ID
 * @property string $extract_type bank = 银行卡 alipay = 支付宝wx=微信
 * @property string $bank_code 银行卡
 * @property string $bank_address 开户地址
 * @property string $alipay_account 支付宝账号
 * @property string $wechat 微信号
 * @property string $qrcode_url 二维码地址
 * @property string $extract_price 提现金额
 * @property string $mark
 * @property string $balance
 * @property integer $status -1 未通过 0 审核中 1 已提现
 * @property integer $pay_status 0 未转账 1 已转账
 * @property string $store_mark 门店备注
 * @property integer $admin_id 管理员ID
 * @property string $fail_msg 无效原因
 * @property integer $fail_time
 * @property string $voucher_image 转账凭证
 * @property string $voucher_title 转账说明
 * @property integer $add_time 添加时间
 */
trait HasEbStoreExtract
{
}
