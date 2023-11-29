<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_store_seckill_time 秒杀时间段配置
 * @property integer $id (主键)
 * @property string $title 
 * @property string $pic 图片
 * @property string $describe 描述
 * @property string $start_time 开始时间
 * @property string $end_time 结束时间
 * @property integer $status 1，0状态
 * @property integer $add_time 添加时间
 */
class EbStoreSeckillTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_store_seckill_time';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
