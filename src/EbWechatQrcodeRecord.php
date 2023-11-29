<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_qrcode_record 渠道码扫码记录表
 * @property integer $id 自增ID(主键)
 * @property integer $qid 渠道码id
 * @property integer $uid 用户id
 * @property integer $is_follow 是否关注
 * @property integer $add_time 扫码时间
 */
class EbWechatQrcodeRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_qrcode_record';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
