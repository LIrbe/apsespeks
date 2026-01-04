<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Objekts extends Model
{
    use HasFactory;

     protected $fillable = [
        "title",
        "description",
        "finish_date",
        "coordinates",
        //"pictures",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function image(): BelongsToMany
    {
        return $this->belongsToMany(Image::class);
    }
}
