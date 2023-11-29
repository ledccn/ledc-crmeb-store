<?php

namespace Ledc\CrmebStore;

/**
 * eb_delivery_service 配送员表
 * @property integer $id id(主键)
 * @property integer $uid 配送员uid
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $avatar 配送员头像
 * @property string $nickname 配送员名称
 * @property string $phone 手机号码
 * @property integer $add_time 添加时间
 * @property integer $is_del 是否删除
 * @property integer $status 0隐藏1显示
 */
trait HasEbDeliveryService
{
}
