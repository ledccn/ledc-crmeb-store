<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_address 用户地址表
 * @property integer $id 用户地址id(主键)
 * @property integer $uid 用户id
 * @property string $real_name 收货人姓名
 * @property string $phone 收货人电话
 * @property string $province 收货人所在省
 * @property string $city 收货人所在市
 * @property string $street 所在镇/街道
 * @property integer $city_id 城市id
 * @property string $district 收货人所在区
 * @property string $detail 收货人详细地址
 * @property integer $post_code 邮编
 * @property string $longitude 经度
 * @property string $latitude 纬度
 * @property integer $is_default 是否默认
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 * @property string $express_name 物流名称
 * @property string $express_phone 物流电话
 */
trait HasEbUserAddress
{
}
