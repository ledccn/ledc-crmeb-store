<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_coupon_issue_user 优惠券前台用户领取记录表
 * @property integer $uid 领取优惠券用户ID
 * @property integer $issue_coupon_id 优惠券前台领取ID
 * @property integer $add_time 领取时间
 */
class EbStoreCouponIssueUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_coupon_issue_user';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
