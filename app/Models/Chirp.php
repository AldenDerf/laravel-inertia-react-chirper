<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    // This relationship is the inverse of the 'has many' relationship we created earlier on the User model.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
