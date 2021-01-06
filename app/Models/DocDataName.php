<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $data_index
 * @property string $data_name
 * @property string $default_value
 * @property string $data_type
 * @property integer $list_index
 * @property integer $order_index
 * @property integer $lock_field
 * @property string $special_field
 * @property string $check_type
 * @property string $check_value_list
 * @property integer $check_bind_index1
 * @property integer $check_bind_index2
 * @property string $check_operator1
 * @property string $check_operator2
 * @property integer $client_field
 * @property integer $must_field
 * @property string $cell_format
 * @property integer $max_length
 * @property integer $min_length
 * @property string $comp_no
 * @property integer $client_updateable
 * @property integer $fs_field
 * @property integer $fs_must_field
 * @property int $fs_order_index
 * @property int $fs_train_order_index
 * @property integer $fs_length
 * @property integer $fs_trainable
 * @property integer $fs_alignment
 * @property string $fs_default_value
 * @property string $fs_data_type
 * @property integer $fs_lock_field
 * @property integer $use_digitgrouping
 * @property integer $num_digits
 * @property int $data_width
 * @property integer $fs_enablebatchlocking
 * @property string $created_at
 * @property string $updated_at
 * @property DocData $docData
 */
class DocDataName extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['data_index', 'data_name', 'default_value', 'data_type', 'list_index', 'order_index', 'lock_field', 'special_field', 'check_type', 'check_value_list', 'check_bind_index1', 'check_bind_index2', 'check_operator1', 'check_operator2', 'client_field', 'must_field', 'cell_format', 'max_length', 'min_length', 'comp_no', 'client_updateable', 'fs_field', 'fs_must_field', 'fs_order_index', 'fs_train_order_index', 'fs_length', 'fs_trainable', 'fs_alignment', 'fs_default_value', 'fs_data_type', 'fs_lock_field', 'use_digitgrouping', 'num_digits', 'data_width', 'fs_enablebatchlocking', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function docData()
    {
        return $this->belongsTo('App\Models\DocData', 'data_index', 'data_index');
    }
}
