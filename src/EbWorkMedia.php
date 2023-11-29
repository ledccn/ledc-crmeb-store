<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_media 企业微信素材
 * @property integer $id (主键)
 * @property string $md5_path 本地路径md5值
 * @property string $type 素材类型
 * @property integer $upload_type 0=临时素材附件,1=朋友圈附件,2=商品附件
 * @property string $path 本地文件路径
 * @property string $media_id 媒体文件上传后获取的唯一标识
 * @property string $url 永久素材路径
 * @property integer $temporary 0=永久，1=非永久
 * @property integer $valid_time 有效期
 * @property integer $create_time 添加时间
 * @property integer $update_time 更新时间
 */
class EbWorkMedia extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_media';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
