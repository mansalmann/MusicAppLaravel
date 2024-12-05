<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'music_title', 'artist_name', 'cover_image',
    ];
}
