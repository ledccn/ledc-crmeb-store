<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_channel_code 企业渠道码（联系我）
 * @property integer $id (主键)
 * @property integer $type 类型：0=全天在线；1=自动上下线
 * @property string $name 二维码名称
 * @property integer $cate_id 分类
 * @property string $label_id 客户标签
 * @property string $reserve_userid 备用成员
 * @property string $userids 全天在线成员
 * @property integer $skip_verify 自动加好友：0=关闭，1=开启
 * @property integer $add_upper_limit 员工添加上限0=关闭,1=开启
 * @property integer $welcome_type 0=使用渠道欢迎，1=默认欢迎语
 * @property string $welcome_words 欢迎语
 * @property string $qrcode_url 联系我二维码链接
 * @property string $config_id 新增联系方式的配置id
 * @property integer $status 状态：1=开启，0=关闭
 * @property integer $client_num 扫码添加客户人数
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 * @property integer $delete_time 删除时间
 */
class EbWorkChannelCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_channel_code';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
