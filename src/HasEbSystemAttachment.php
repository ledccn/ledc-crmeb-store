<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_attachment 附件管理表
 * @property integer $att_id (主键)
 * @property integer $type 类型：1平台2:门店
 * @property integer $file_type 文件类型：1:图片2：视频
 * @property integer $relation_id 关联id
 * @property string $name 附件名称
 * @property string $att_dir 附件路径
 * @property string $satt_dir 压缩图片路径
 * @property mixed $att_size 附件大小
 * @property mixed $att_type 附件类型
 * @property integer $pid 分类ID
 * @property integer $time 上传时间
 * @property integer $image_type 图片上传类型 1本地 2七牛云 3OSS 4COS
 * @property integer $module_type 图片上传模块类型 1 后台上传 2 用户生成
 * @property string $real_name 原始文件名
 * @property string $scan_token 扫码上传的token
 */
trait HasEbSystemAttachment
{
}
