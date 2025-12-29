<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        "path",
    ];

    protected $casts = [
        'upload_time' => 'datetime',
        'upload_user' => 'user',
    ];
}
