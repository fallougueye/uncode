<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $data_index
 * @property string $doc_id
 * @property string $data_value
 * @property string $stamp_date
 * @property string $stamp_uid
 * @property string $created_at
 * @property string $updated_at
 * @property Doc $doc
 * @property DocDataName[] $docDataNames
 */
class DocData extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'data_index';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['doc_id', 'data_value', 'stamp_date', 'stamp_uid', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', null, 'doc_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docDataNames()
    {
        return $this->hasMany('App\Models\DocDataName', 'data_index', 'data_index');
    }
}
