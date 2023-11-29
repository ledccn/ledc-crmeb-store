<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_storage 云储存
 * @property integer $id 主键id(主键)
 * @property string $access_key access_key
 * @property integer $type 1=本地存储,2=七牛,3=oss,4=cos
 * @property string $name 空间名
 * @property string $region 地域
 * @property string $acl 权限
 * @property string $domain 空间域名
 * @property string $cname CNAME值
 * @property integer $is_ssl 0=http,1=https
 * @property integer $status 状态
 * @property integer $is_delete 是否删除
 * @property integer $add_time 添加事件
 * @property integer $update_time 更新事件
 */
class EbSystemStorage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_storage';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
