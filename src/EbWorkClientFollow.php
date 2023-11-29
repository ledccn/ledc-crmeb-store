<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_client_follow 企业微信客服跟踪
 * @property integer $id (主键)
 * @property integer $client_id 客户id
 * @property string $userid 添加了此外部联系人的企业成员userid
 * @property string $remark 该成员对此外部联系人的备注
 * @property string $description 该成员对此外部联系人的描述
 * @property integer $createtime 该成员添加此外部联系人的时间
 * @property string $remark_corp_name 该成员对此微信客户备注的企业名称
 * @property string $remark_mobiles 该成员对此客户备注的手机号码
 * @property integer $add_way 该成员添加此客户的来源
 * @property string $oper_userid 发起添加的userid，如果成员主动添加，为成员的userid；如果是客户主动添加，则为客户的外部联系人userid；如果是内部成员共享/管理员分配，则为对应的成员/管理员userid
 * @property string $state 自定义字段返回数据
 * @property integer $is_del_user 客户是否删除跟踪人:0=没有,1=删除
 * @property integer $create_time 创建时间
 * @property integer $update_time 更新时间
 */
class EbWorkClientFollow extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_client_follow';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
