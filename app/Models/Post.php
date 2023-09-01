<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'view_id',
        'page_meta_data',
        'link_tag',
        'card_id',
        'description',
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
