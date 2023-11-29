<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_template_message 微信模板
 * @property integer $id 模板id(主键)
 * @property string $notification_id 模版通知场景ID,多个
 * @property integer $type 0=订阅消息,1=微信模板消息
 * @property mixed $tempkey 模板编号
 * @property mixed $name 模板名
 * @property string $kid
 * @property string $content 回复内容
 * @property string $example 模版示例
 * @property mixed $tempid 模板ID
 * @property string $add_time 添加时间
 * @property integer $status 状态
 */
class EbTemplateMessage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_template_message';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
