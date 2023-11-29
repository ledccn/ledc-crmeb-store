<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_qrcode_cate 二维码类型表
 * @property integer $id 主键id(主键)
 * @property string $cate_name 渠道码分类名称
 * @property integer $add_time 添加时间
 * @property integer $is_del 是否删除
 */
class EbWechatQrcodeCate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_qrcode_cate';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
