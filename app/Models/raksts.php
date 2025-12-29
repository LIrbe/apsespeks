<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raksts extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "content",
        "date",
        "pictures",
        "type",
        "pin"
    ];
}
