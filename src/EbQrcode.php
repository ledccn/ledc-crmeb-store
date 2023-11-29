<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_qrcode 微信二维码管理表
 * @property integer $id 微信二维码ID(主键)
 * @property string $third_type 二维码类型
 * @property integer $third_id 用户id
 * @property string $ticket 二维码参数
 * @property integer $expire_seconds 二维码有效时间
 * @property integer $status 状态
 * @property string $add_time 添加时间
 * @property string $url 微信访问url
 * @property string $qrcode_url 微信二维码url
 * @property integer $scan 被扫的次数
 * @property integer $type 二维码所属平台1=小程序，2=公众号，3=H5
 */
class EbQrcode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_qrcode';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
