<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_live_anchor 直播主播表
 * @property integer $id (主键)
 * @property string $name 主播名称
 * @property string $cover_img 主播图像
 * @property string $wechat 主播微信号
 * @property string $phone 手机号
 * @property integer $is_show 是否显示
 * @property integer $is_del 是否删除
 * @property integer $add_time
 */
class EbLiveAnchor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_live_anchor';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
