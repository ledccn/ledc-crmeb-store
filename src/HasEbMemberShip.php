<?php

namespace Ledc\CrmebStore;

/**
 * eb_member_ship 会员类型
 * @property integer $id (主键)
 * @property string $type 会员类别month:月卡会员；quarter:季卡；year:年卡；ever:永久；free:免费
 * @property string $title 会员名称
 * @property integer $vip_day 会员时间(天)
 * @property string $price 原价
 * @property string $pre_price 优惠后价格
 * @property integer $sort 排序倒序
 * @property integer $is_del 删除
 * @property integer $add_time 添加时间
 */
trait HasEbMemberShip
{
}
