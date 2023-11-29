<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_label 用户标签表
 * @property integer $id (主键)
 * @property integer $type 类型：0平台1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property integer $label_cate 标签分类
 * @property string $label_name 标签名称
 * @property string $tag_id 企业微信同步标签id
 */
trait HasEbUserLabel
{
}
