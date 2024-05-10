<?php

namespace App\Http\Controllers;

use App\Models\FavouriteKeyword;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class KeywordController extends Controller
{

    public function index(){
        return view('pages.keyword');
    }

    public function create(Request $request){
        $keyword = $request->keyword;

        try{
            $string = str_replace(' ', '%20', $keyword);
            $api_url = 'https://bookgrip.com/api/?keyword='.$string;
            $json_data = file_get_contents($api_url);


            $results = json_decode($json_data);
            
            if(isset($results)){
                // $collection = collect($results);
                // $currentPage = $request->input('page', 1);
                // $perPage = 50;
                // $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage);

                // // Create a paginator instance
                // $results = new Paginator($currentPageItems, $collection->count(), $perPage, [
                //     'path' => 'keyword-research',
                // ]);
                // return view('pages.keyword', compact('paginator'));
                return view('pages.keyword', compact('results'));
            }
            else{
                return redirect()->back()->with('error', 'Try after some time.');
            }
            
            
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }

        
    }

    public function favourite(Request $request){
        $id = $request->id;
        $keyword = $request->keyword;
        $search_volume = $request->search_volume;
        $user_id = auth()->user()->id;
        
        $favouriteKeyword = new FavouriteKeyword;

        $favouriteKeyword->keyword_id = $id;
        $favouriteKeyword->user_id = $user_id;
        $favouriteKeyword->keyword = $keyword;
        $favouriteKeyword->search_volume = $search_volume;
        $favouriteKeyword->save();

        return redirect()->back()->with('success','Keyword added to your favourite list!');

    }

    public function show_favourite(Request $request){
        $id = auth()->user()->id;
        $keywords = FavouriteKeyword::where('user_id', $id)->get();
        return view('pages.favourite-keywords', compact('keywords'));
    }

    public function delete_favourite(Request $request){
        $id = $request->id;
        FavouriteKeyword::find($id)->delete();
        return redirect()->back()->with('success','Keyword deleted!');
    }


    
}
