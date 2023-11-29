<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_queue_auxiliary 辅助表
 * @property integer $id (主键)
 * @property integer $binding_id 绑定id
 * @property integer $relation_id 关联id
 * @property integer $type 类型0=客服转接辅助，1=商品和分类辅助，2=优惠券和商品辅助
 * @property string $other 其他数据为json
 * @property integer $status 数据状态 0：未执行，1：成功， 2：失败， 3:删除
 * @property integer $update_time 更新时间
 * @property integer $add_time 添加时间
 */
class EbQueueAuxiliary extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_queue_auxiliary';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
