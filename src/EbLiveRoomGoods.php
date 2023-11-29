<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_live_room_goods 直播间导入商品表
 * @property integer $live_room_id
 * @property integer $live_goods_id
 */
class EbLiveRoomGoods extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_live_room_goods';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
