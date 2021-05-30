<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    public $table = 'artists';

    protected $fillable = [
        'category',
        'brand',
        'about',
        'website',
        'spotify',
        'soundcloud',
        'applemusic',
        'youtube',
        'facebook',
        'instagram',
        'user_id',
        'photo'
    ];
}
