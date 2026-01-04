<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function raksts(): BelongsToMany
    {
        return $this->belongsToMany(Raksts::class);
    }

    public function objekts(): BelongsToMany
    {
        return $this->belongsToMany(Objekts::class);
    }
}
