<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_user 微信用户表
 * @property integer $id (主键)
 * @property integer $uid 微信用户id
 * @property string $unionid 只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段
 * @property string $openid 用户的标识，对当前公众号唯一
 * @property string $nickname 用户的昵称
 * @property string $headimgurl 用户头像
 * @property integer $sex 用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
 * @property string $city 用户所在城市
 * @property string $language 用户的语言，简体中文为zh_CN
 * @property string $province 用户所在省份
 * @property string $country 用户所在国家
 * @property string $remark 公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
 * @property integer $groupid 用户所在的分组ID（兼容旧的用户分组接口）
 * @property string $tagid_list 用户被打上的标签ID列表
 * @property integer $subscribe 用户是否订阅该公众号标识
 * @property integer $subscribe_time 关注公众号时间
 * @property integer $add_time 添加时间
 * @property integer $second 二级推荐人
 * @property string $user_type 用户类型
 * @property integer $is_complete 授权信息是否完整
 * @property integer $is_del 是否删除
 */
class EbWechatUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_user';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
