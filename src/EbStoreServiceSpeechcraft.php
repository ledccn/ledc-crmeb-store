<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_service_speechcraft 客服话术
 * @property integer $id (主键)
 * @property integer $kefu_id 0为全局话术
 * @property integer $cate_id 0为不分类全局话术
 * @property string $title 话术标题
 * @property string $message 话术内容
 * @property integer $sort 排序
 * @property integer $add_time 添加时间
 */
class EbStoreServiceSpeechcraft extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_service_speechcraft';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
