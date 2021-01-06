<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $log_index
 * @property string $doc_id
 * @property string $stamp_uid
 * @property string $stamp_date
 * @property string $log_comment
 * @property string $created_at
 * @property string $updated_at
 * @property Doc $doc
 * @property AccActionLogName[] $accActionLogNames
 */
class AccActionLog extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'log_index';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['doc_id', 'stamp_uid', 'stamp_date', 'log_comment', 'created_at', 'updated_at'];

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
    public function accActionLogNames()
    {
        return $this->hasMany('App\Models\AccActionLogName', 'log_index', 'log_index');
    }
}
