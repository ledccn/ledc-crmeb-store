<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_welcome 企业微信欢迎语
 * @property integer $id (主键)
 * @property integer $type 0=通用,1=指定员工
 * @property string $content 消息内容
 * @property string $attachments 欢迎语消息体
 * @property integer $sort 排序
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
class EbWorkWelcome extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_welcome';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
