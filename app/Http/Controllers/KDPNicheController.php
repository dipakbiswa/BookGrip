<?php

namespace App\Http\Controllers;

use App\Models\FavouriteNiche;
use App\Models\User;
use Illuminate\Http\Request;

class KDPNicheController extends Controller
{
    public function index(){
        return view("pages.kdp-niche-finder");
    }

    public function create(Request $request){
        $market = $request->market;
        $keyword = $request->keyword;

        if(auth()->user()->niche_finder_credits > 0){
            try{
                $string = str_replace(' ', '%20', $keyword);
                $api_url = 'https://bookgrip.com/api/niche_finder.php?keyword='.$string.'&market='.$market;
                // $api_url = "https://bookgrip.com/api/niche_finder.php?keyword=coloring&market=US";
                $json_data = file_get_contents($api_url);
                $results = json_decode($json_data);
                if(isset($results)){

                    //Update credits
                    $credits = auth()->user()->niche_finder_credits;
                    $update_credits = User::find(auth()->user()->id);
                    $update_credits->niche_finder_credits = $credits - 1;
                    $update_credits->update();
                    
                    return view('pages.kdp-niche-finder', compact('results'));
                }
                else{
                    return redirect()->back()->with('error', 'Try after some time.');
                }
                
                
            }catch(\Exception $e){
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
        else{
            return redirect()->back()->with('status','You don\'t have any credits left for this month!');
        }
    }

    public function show_favourite(){
        $results = FavouriteNiche::where('user_id', auth()->user()->id)->get();
        return view('pages.favourite-niches', compact('results'));
    }

    public function add_favourite(Request $request){
        $user_id = auth()->user()->id;
        $market = $request->market;
        $niche_keyword = $request->niche_keyword;
        $niche_score = $request->niche_score;
        $buyer_demand = $request->buyer_demand;
        $competition_opportunity = $request->competition_opportunity;
        $investment = $request->investment;
        $revenue_potential = $request->revenue_potential;
        $currency = $request->currency;
        $search_volume = $request->search_volume;
        $av_sales = $request->av_sales;
        $av_price = $request->av_price;
        $av_ratings = $request->av_ratings;
        $av_rating = $request->av_rating;
        $av_revenue = $request->av_revenue;
        $launch_budget = $request->launch_budget;
        $main_category = $request->main_category;
        $av_listing_strength = $request->av_listing_strength;
        $fba = $request->fba;
        $ppc_bid = $request->ppc_bid;
        $kw = $request->kw;
        $kw_title = $request->kw_title;

        $favouriteNiche = new FavouriteNiche;
        $favouriteNiche->user_id = $user_id;
        $favouriteNiche->market = $market;
        $favouriteNiche->niche_keyword = $niche_keyword;
        $favouriteNiche->niche_score = $niche_score;
        $favouriteNiche->buyer_demand = $buyer_demand;
        $favouriteNiche->competition_opportunity = $competition_opportunity;
        $favouriteNiche->investment = $investment;
        $favouriteNiche->revenue_potential = $revenue_potential;
        $favouriteNiche->currency = $currency;
        $favouriteNiche->search_volume = $search_volume;
        $favouriteNiche->av_sales = $av_sales;
        $favouriteNiche->av_price = $av_price;
        $favouriteNiche->av_ratings = $av_ratings;
        $favouriteNiche->av_rating = $av_rating;
        $favouriteNiche->av_revenue = $av_revenue;
        $favouriteNiche->launch_budget = $launch_budget;
        $favouriteNiche->main_category = $main_category;
        $favouriteNiche->av_listing_strength = $av_listing_strength;
        $favouriteNiche->fba = $fba;
        $favouriteNiche->ppc_bid = $ppc_bid;
        $favouriteNiche->kw = $kw;
        $favouriteNiche->kw_title = $kw_title;
        $favouriteNiche->save();

        return redirect()->back()->with('success','Niche added to your favourite list!');

    }

    public function delete_favourite(Request $request){
        FavouriteNiche::find($request->id)->delete();
        return redirect()->back()->with('success', 'Niche deleted!');
    }
}
