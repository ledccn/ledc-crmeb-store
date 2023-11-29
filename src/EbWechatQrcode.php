<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_qrcode 二维码表
 * @property integer $id 编号(主键)
 * @property integer $uid 用户id
 * @property string $name 二维码名称
 * @property string $image 二维码图片
 * @property integer $cate_id 分类id
 * @property string $label_id 标签id
 * @property string $type 回复类型
 * @property string $content 回复内容
 * @property string $data 发送数据
 * @property integer $follow 关注人数
 * @property integer $scan 扫码人数
 * @property integer $add_time 添加时间
 * @property integer $continue_time 有效期
 * @property integer $end_time 到期时间
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 */
class EbWechatQrcode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_qrcode';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
