<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'link_tag',
        'description',
        'user_id',
        'state'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
