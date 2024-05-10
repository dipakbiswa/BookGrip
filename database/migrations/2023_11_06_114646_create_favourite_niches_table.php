<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('favourite_niches', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('market');
            $table->string('niche_keyword');
            $table->string('niche_score');
            $table->string('buyer_demand');
            $table->string('competition_opportunity');
            $table->string('investment');
            $table->string('revenue_potential');
            $table->string('currency');
            $table->string('search_volume');
            $table->string('av_sales');
            $table->string('av_price');
            $table->string('av_ratings');
            $table->string('av_rating');
            $table->string('av_revenue');
            $table->string('launch_budget');
            $table->string('main_category');
            $table->string('av_listing_strength');
            $table->string('fba');
            $table->string('ppc_bid');
            $table->string('kw');
            $table->string('kw_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favourite_niches');
    }
};
