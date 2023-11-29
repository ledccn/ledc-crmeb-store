<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_agreement 会员协议
 * @property integer $id (主键)
 * @property integer $type 协议类型  1：会员协议
 * @property string $title 协议名称
 * @property string $content 协议内容
 * @property integer $sort 排序倒序
 * @property integer $status 1：显示：0：不显示
 * @property integer $add_time 添加时间
 */
class EbAgreement extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_agreement';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
