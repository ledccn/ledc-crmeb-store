<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_sms_record 短信发送记录表
 * @property integer $id 短信发送记录编号(主键)
 * @property string $uid 短信平台账号
 * @property mixed $phone 接受短信的手机号
 * @property string $content 短信内容
 * @property integer $add_time 发送短信时间
 * @property string $add_ip 添加记录ip
 * @property string $template 短信模板ID
 * @property integer $resultcode 状态码 100=成功,130=失败,131=空号,132=停机,133=关机,134=无状态
 * @property integer $record_id 发送记录id
 */
class EbSmsRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_sms_record';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
