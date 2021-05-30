<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\User;

class VideoUploads extends Model
{
    use HasFactory;
    protected $table = 'upload_videos';

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
