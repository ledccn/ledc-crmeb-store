<?php

namespace Ledc\CrmebStore;

/**
 * eb_user_search 用户搜索记录表
 * @property integer $id (主键)
 * @property integer $uid 用户uid
 * @property string $keyword 搜索关键词
 * @property string $vicword 关键词分词
 * @property integer $num 搜索次数
 * @property string $result 搜索结果
 * @property integer $is_del 删除
 * @property integer $add_time 时间
 */
trait HasEbUserSearch
{
}
