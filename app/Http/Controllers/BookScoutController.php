<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class BookScoutController extends Controller
{
    public function index(){
        return view('pages.book-scout');
    }

    public function create(Request $request){
        $asin = $request->asin;

        // $response = Http::withBody('[{"asins":{"1": '.$asin.'}, "location_code":2840, "language_code":"en", "limit":100, "offset":0}]')    
        //                 ->withHeaders(['Authorization' => 'Basic dmVnYW5iYXNlZGNvb2tib29rQGdtYWlsLmNvbToyNTIzMmMwMmJjMjA1YTkw',])   
        //                 ->post('https://api.dataforseo.com/v3/dataforseo_labs/amazon/product_keyword_intersections/live');

        // dd($response);

        if(auth()->user()->book_scout_credit > 0){

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.dataforseo.com/v3/dataforseo_labs/amazon/product_keyword_intersections/live',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'[
                    {"asins":{"1": "'.$asin.'"}, "location_code":2840, "language_code":"en", "limit":100, "offset":0}
                ]',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Basic Ym9va2dyaXAua2RwQGdtYWlsLmNvbTo1YmY4ZDk2NzA0N2ExZTJm',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            echo "<pre>";

            $status_code = $response['tasks'][0]['status_code'];
            if($status_code === 20000){
                $asinCode = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['asin'];
                $title = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['title'];
                $image_url = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['image_url'];
                $price_from = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['price_from'];
                $currency = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['currency'];
                $url = $response['tasks'][0]['result'][0]['items'][0]['intersection_result'][1]['url'];
                $result_count = $response['tasks'][0]['result'][0]['items_count'];

                $data = array();
                $data = $response['tasks'][0]['result'][0]['items'];

                //Update credits
                $credits = auth()->user()->book_scout_credit;
                $update_credits = User::find(auth()->user()->id);
                $update_credits->book_scout_credit = $credits - 1;
                $update_credits->update();

                return redirect()->route('book-scout-data')->with(['result_count' => $result_count, 'asinCode' => $asinCode, 'title' => $title, 'image_url' => $image_url, 'price_from' => $price_from, 'currency' => $currency, 'url' => $url, 'data' => [$data]]);
            }
            else{
                return redirect()->route('book-scout')->with('status', 'Something went wrong! Try again later!');
            } 
        }
        else{
            return redirect()->back()->with('status','You don\'t have any credits left for today!');
        }
        // print_r($response);
    }
}
