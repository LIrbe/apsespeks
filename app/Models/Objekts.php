<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objekts extends Model
{
    use HasFactory;

     protected $fillable = [
        "title",
        "description",
        "finish_date",
        "coordinates",
        "pictures",
    ];
}
