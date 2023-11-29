<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_work_welcome_relation 欢迎语辅助表
 * @property integer $welcome_id 欢迎语id
 * @property string $userid 用户userid
 */
class EbWorkWelcomeRelation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_work_welcome_relation';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
