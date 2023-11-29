<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_media 微信回复表
 * @property integer $id 微信视频音频id(主键)
 * @property string $type 回复类型
 * @property string $path 文件路径
 * @property string $media_id 微信服务器返回的id
 * @property string $url 地址
 * @property integer $temporary 是否永久或者临时 0永久1临时
 * @property integer $add_time 添加时间
 */
class EbWechatMedia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_media';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
