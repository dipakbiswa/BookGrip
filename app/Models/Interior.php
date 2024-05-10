<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'free_image',
        'paid_image',
        'free',
        'category',
        'png_image',
    ];
}
