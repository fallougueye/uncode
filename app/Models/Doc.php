<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $doc_id
 * @property string $scan_date
 * @property string $comp_no
 * @property string $doc_name
 * @property integer $doc_pages
 * @property integer $flow_fixed
 * @property string $supplier_num
 * @property string $invoice_num
 * @property string $voucher_num
 * @property string $invoice_date
 * @property string $invoice_last_date
 * @property float $invoice_sum
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property integer $status_index
 * @property string $order_num
 * @property string $last_acceptor
 * @property float $exchange_rate
 * @property string $invoice_currency
 * @property float $invoice_sum_calc
 * @property string $cash_date
 * @property string $accounting_period
 * @property string $supplier_name
 * @property string $attrib_t1
 * @property string $attrib_t2
 * @property string $attrib_t3
 * @property string $attrib_t4
 * @property string $attrib_t5
 * @property string $attrib_t6]
 * @property string $attrib_t7
 * @property float $attrib_n
 * @property float $attrib_n2
 * @property float $attrib_n3
 * @property float $attrib_n4
 * @property string $attrib_d
 * @property string $attrib_d2
 * @property string $attrib_d3
 * @property string $attrib_d4
 * @property string $bff_resource
 * @property float $vat_sum
 * @property float $invoice_serial
 * @property string $invoice_type
 * @property integer $prebooked
 * @property integer $secondary_status
 * @property string $entry_date
 * @property string $voucher_group
 * @property string $voucher_period
 * @property integer $user_serial
 * @property float $net_sum_calc
 * @property float $net_sum
 * @property integer $with_comments
 * @property integer $external_status
 * @property string $voucher_year
 * @property integer $serial_year
 * @property string $gl_date
 * @property string $credit_memo
 * @property string $vat_sum_calc
 * @property string $hold_owner
 * @property string $lock_owner
 * @property string $lock_date
 * @property integer $lock_index
 * @property string $contract_num
 * @property integer $oneaction
 * @property integer $transfer_check
 * @property integer $autoflow_status_index
 * @property integer $match_status_index
 * @property integer $custom_action_status
 * @property string $preprocessing_timestamp
 * @property string $supplier_rep_code
 * @property string $supplier_rep_name
 * @property string $payment_date
 * @property string $delivery_note_number
 * @property string $reference_person
 * @property integer $CM_REQUEST
 * @property integer $invoice_origin
 * @property string $match_wait_until
 * @property string $invoice_category
 * @property string $parent_invoice_id
 * @property integer $MC_MATCH_STATUS_INDEX
 * @property integer $account_id
 * @property AccActionLog[] $accActionLogs
 * @property AccData[] $accDatas
 * @property DocAttachment[] $docAttachments
 * @property DocData[] $docDatas
 * @property DocFile[] $docFiles
 */
class Doc extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'doc_id';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['scan_date', 'comp_no', 'doc_name', 'doc_pages', 'flow_fixed', 'supplier_num', 'invoice_num', 'voucher_num', 'invoice_date', 'invoice_last_date', 'invoice_sum', 'stamp_date', 'stamp_uid', 'status_index', 'order_num', 'last_acceptor', 'exchange_rate', 'invoice_currency', 'invoice_sum_calc', 'cash_date', 'accounting_period', 'supplier_name', 'attrib_t1', 'attrib_t2', 'attrib_t3', 'attrib_t4', 'attrib_t5', 'attrib_t6]', 'attrib_t7', 'attrib_n', 'attrib_n2', 'attrib_n3', 'attrib_n4', 'attrib_d', 'attrib_d2', 'attrib_d3', 'attrib_d4', 'bff_resource', 'vat_sum', 'invoice_serial', 'invoice_type', 'prebooked', 'secondary_status', 'entry_date', 'voucher_group', 'voucher_period', 'user_serial', 'net_sum_calc', 'net_sum', 'with_comments', 'external_status', 'voucher_year', 'serial_year', 'gl_date', 'credit_memo', 'vat_sum_calc', 'hold_owner', 'lock_owner', 'lock_date', 'lock_index', 'contract_num', 'oneaction', 'transfer_check', 'autoflow_status_index', 'match_status_index', 'custom_action_status', 'preprocessing_timestamp', 'supplier_rep_code', 'supplier_rep_name', 'payment_date', 'delivery_note_number', 'reference_person', 'CM_REQUEST', 'invoice_origin', 'match_wait_until', 'invoice_category', 'parent_invoice_id', 'MC_MATCH_STATUS_INDEX', 'account_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accActionLogs()
    {
        return $this->hasMany('App\Models\AccActionLog', null, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accDatas()
    {
        return $this->hasMany('App\Models\AccData', null, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docAttachments()
    {
        return $this->hasMany('App\Models\DocAttachment', null, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDatas()
    {
        return $this->hasMany('App\Models\DocData', null, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docFiles()
    {
        return $this->hasMany('App\Models\DocFile', null, 'doc_id');
    }
}
