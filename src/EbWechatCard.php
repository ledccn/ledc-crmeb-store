<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_wechat_card 微信卡券表
 * @property integer $id (主键)
 * @property string $card_id 卡券ID（微信返回）
 * @property string $card_type 卡券类型：默认会员卡
 * @property string $code_type 码类型
 * @property string $brand_name 商户名称
 * @property string $title 卡券名称
 * @property string $color 颜色
 * @property string $notice 卡券使用提醒
 * @property string $description 描述
 * @property string $center_title 卡券中部居中的按钮，仅在卡券激活后且可用状态 时显示
 * @property string $center_sub_title 显示在入口下方的提示语 ， 仅在卡券激活后且可用状态时显示
 * @property string $center_url 顶部居中的url ，仅在卡券激活后且可用状态时显示
 * @property string $service_phone 联系方式
 * @property string $logo_url logo URL
 * @property string $background_pic_url 背景图
 * @property string $prerogative 特权说明
 * @property mixed $especial 特别追加参数
 * @property integer $status 状态
 * @property integer $is_del 是否删除
 * @property integer $add_time 添加时间
 */
class EbWechatCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_wechat_card';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
