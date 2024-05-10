<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteNiche extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'market',
        'niche_keyword',
        'niche_score',
        'buyer_demand',
        'competition_opportunity',
        'investment',
        'revenue_potential',
        'currency',
        'search_volume',
        'av_sales',
        'av_price',
        'av_ratings',
        'av_rating',
        'av_revenue',
        'launch_budget',
        'main_category',
        'av_listing_strength',
        'fba',
        'ppc_bid',
        'kw',
        'kw_title',
    ];
}
