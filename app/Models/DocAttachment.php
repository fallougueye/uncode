<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $doc_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $attachment_name
 * @property string $attachment_file
 * @property string $attachment_owner
 * @property string $attachment_resource
 * @property string $user_org_code
 * @property string $resource_id
 * @property integer $attachment_encrypted
 * @property string $original_file_name
 * @property Doc $doc
 */
class DocAttachment extends Model
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
    protected $fillable = ['doc_id', 'created_at', 'updated_at', 'attachment_name', 'attachment_file', 'attachment_owner', 'attachment_resource', 'user_org_code', 'resource_id', 'attachment_encrypted', 'original_file_name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doc()
    {
        return $this->belongsTo('App\Models\Doc', null, 'doc_id');
    }
}
