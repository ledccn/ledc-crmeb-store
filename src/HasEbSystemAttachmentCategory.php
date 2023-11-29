<?php

namespace Ledc\CrmebStore;

/**
 * eb_system_attachment_category 附件分类表
 * @property integer $id (主键)
 * @property integer $type 类型：1平台2:门店
 * @property integer $file_type 文件类型：1:图片2：视频
 * @property integer $relation_id 关联id
 * @property integer $pid 父级ID
 * @property string $name 分类名称
 * @property string $enname 分类目录
 */
trait HasEbSystemAttachmentCategory
{
}
