<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TradeMarkController extends Controller
{
    public function index(){
        return view("pages.trade-mark");
    }

    public function post(Request $request){
        $trademark = $request->trademark;
        $type = $request->type;
        
        if(auth()->user()->trade_mark_credits > 0){
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://uspto-trademark.p.rapidapi.com/v1/trademarkSearch/$trademark/$type",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: uspto-trademark.p.rapidapi.com",
                    "X-RapidAPI-Key: f671a03aacmsh25faf09361313a3p1f07a2jsne03076894f81"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $response = json_decode($response, true);
            $results = $response['items'];
            $count = $response['count'];
            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {

                //Update credits
                $credits = auth()->user()->trade_mark_credits;
                $update_credits = User::find(auth()->user()->id);
                $update_credits->trade_mark_credits = $credits - 1;
                $update_credits->update();

                if($count != 0)
                    return view("pages.trade-mark", compact('results'));
                else
                    return redirect()->back()->with('status', "No results found for $trademark!");
            }
        }
        else{
            return redirect()->back()->with('status','You don\'t have any credits left for this month!');
        }
    }

}
