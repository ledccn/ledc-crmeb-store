<?php

namespace Ledc\CrmebStore;

/**
 * eb_store_config 门店配置表
 * @property integer $id (主键)
 * @property integer $type 类型：1:门店2:供应商
 * @property integer $relation_id 门店、供应商id
 * @property string $key_name 配置key
 * @property string $value 值
 * @property integer $add_time 添加时间
 */
trait HasEbStoreConfig
{
}
