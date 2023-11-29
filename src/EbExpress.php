<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_express 快递公司表
 * @property integer $id 快递公司id(主键)
 * @property string $code 快递公司简称
 * @property string $name 快递公司全称
 * @property integer $partner_id 是否需要月结账号
 * @property integer $partner_key 是否需要月结密码
 * @property integer $net 是否需要取件网店
 * @property integer $check_man 是否填写电子面单承载快递员名
 * @property integer $partner_name 是否填写电子面单客户账户名称
 * @property integer $is_code 是否填写电子面单承载编号
 * @property string $courier_name 承载快递员名
 * @property string $customer_name 客户账户名称
 * @property string $code_name 电子面单承载编号
 * @property string $account 账号
 * @property string $key 密码
 * @property string $net_name 网点名称
 * @property integer $sort 排序
 * @property integer $is_show 是否显示
 * @property integer $status 是否可用
 */
class EbExpress extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_express';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
