<?php

namespace Ledc\CrmebStore;

/**
 * eb_page_link 页面链接
 * @property integer $id (主键)
 * @property integer $cate_id 分类id
 * @property integer $type 分组1:基础2:分销3:个人中心
 * @property string $name 页面名称
 * @property string $url 页面链接
 * @property string $param 参数
 * @property string $example 事例
 * @property integer $status 状态
 * @property integer $sort 排序
 * @property integer $add_time 添加时间
 */
trait HasEbPageLink
{
}
