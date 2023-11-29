<?php

namespace Ledc\CrmebStore;

use think\Model;

/**
 * eb_supplier_ticket_print 配置表
 * @property integer $id id(主键)
 * @property integer $supplier_id 供应商ID
 * @property integer $develop_id 用户ID
 * @property string $api_key 秘钥
 * @property string $client_id 应用ID
 * @property string $terminal_number 终端号
 * @property integer $status 开启状态
 */
class EbSupplierTicketPrint extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eb_supplier_ticket_print';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $pk = 'id';


}
