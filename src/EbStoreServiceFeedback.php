<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_service_feedback 客服反馈表
 * @property integer $id (主键)
 * @property integer $uid 用户UID
 * @property string $rela_name 姓名
 * @property string $phone 电话
 * @property string $content 反馈内容
 * @property string $make 备注
 * @property integer $status 状态0=未查看，1=已查看
 * @property integer $add_time 添加时间
 */
class EbStoreServiceFeedback extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_service_feedback';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
