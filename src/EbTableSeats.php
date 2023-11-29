<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_table_seats 座位数
 * @property integer $id (主键)
 * @property integer $store_id 门店id
 * @property integer $number 座位数
 * @property integer $add_time 添加时间
 */
class EbTableSeats extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_table_seats';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
