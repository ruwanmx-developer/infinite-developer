<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'short_description',
        'long_description',
        'page_meta_data',
        'link_tag',
    ];
}
