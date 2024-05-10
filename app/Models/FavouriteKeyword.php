<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteKeyword extends Model
{
    use HasFactory;

    protected $fillable = [
        'keyword_id',
        'keyword',
        'search_volume',
        'user_id',
    ];
}
