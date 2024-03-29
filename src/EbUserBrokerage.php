<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_user_brokerage 用户账单表
 * @property integer $id 用户佣金id(主键)
 * @property integer $uid 用户uid
 * @property string $link_id 关联id
 * @property string $type 明细类型
 * @property string $title 账单标题
 * @property string $number 明细数字
 * @property string $balance 剩余
 * @property integer $pm 0 = 支出 1 = 获得
 * @property string $mark 备注
 * @property integer $status 0 = 带确定 1 = 有效 -1 = 无效
 * @property integer $take 0 = 未收货 1 = 已收货
 * @property integer $frozen_time 冻结到期时间
 * @property integer $add_time 添加时间
 */
class EbUserBrokerage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_user_brokerage';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
