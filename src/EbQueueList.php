<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_queue_list 任务列表
 * @property integer $id (主键)
 * @property integer $type 队列类型  1：批量发放用户优惠券 2 : 批量设置用户分组, 3:批量设置用户标签, 4:批量下架商品, 5:批量删除商品规格, 6:批量删除订单, 7:批量手动发货, 8:批量打印电子面单, 9:批量配送, 10:批量虚拟发货(主键)
 * @property string $source 来源 前端：home ，后端：admin
 * @property string $execute_key 队列执行数据缓存key
 * @property string $title  队列名称
 * @property string $queue_in_value 队列参数
 * @property integer $sort 排序倒序
 * @property integer $status 0 :尚未执行，1：正在执行，2：执行成功, 3:执行失败,4: 删除的异常队列(主键)
 * @property integer $first_time 首次执行时间
 * @property integer $again_time 再次执行时间
 * @property integer $finish_time 完成时间
 * @property integer $surplus_num 剩余未执行数量
 * @property integer $total_num  总数量
 * @property integer $is_del 
 * @property integer $add_time
 */
class EbQueueList extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_queue_list';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'status';

    
}
