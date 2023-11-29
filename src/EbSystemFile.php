<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_system_file 文件对比表
 * @property integer $id 文件对比ID(主键)
 * @property mixed $cthash 文件内容
 * @property string $filename 文价名称
 * @property mixed $atime 上次访问时间
 * @property mixed $mtime 上次修改时间
 * @property mixed $ctime 上次改变时间
 */
class EbSystemFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_system_file';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';

    
}
