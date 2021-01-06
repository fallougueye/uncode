<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $invoice_type_code
 * @property string $comp_no
 * @property string $invoice_type_name
 * @property integer $handle_code
 * @property integer $layer
 * @property int $credit_memo
 * @property integer $INVOICE_TYPE_CAT
 * @property string $created_at
 * @property string $updated_at
 * @property Compagny $compagny
 */
class InvoiceType extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'invoice_type_code';

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
    protected $fillable = ['comp_no', 'invoice_type_name', 'handle_code', 'layer', 'credit_memo', 'INVOICE_TYPE_CAT', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function compagny()
    {
        return $this->belongsTo('App\Models\Compagny', 'comp_no', 'comp_no');
    }
}
