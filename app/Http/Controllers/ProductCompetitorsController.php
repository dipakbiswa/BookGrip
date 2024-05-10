<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductCompetitorsController extends Controller
{
    public function index(){
        return view("pages.product-competitors");
    }

    public function create(Request $request){
        $asin = $request->asin;

        if(auth()->user()->book_scout_credit > 0){

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.dataforseo.com/v3/dataforseo_labs/amazon/product_competitors/live',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'[
                    {"asin":"'.$asin.'", "location_code":2840, "language_code":"en", "load_rank_absolute":false, "limit":100, "offset":0}
                ]',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Basic Ym9va2dyaXAua2RwQGdtYWlsLmNvbTo1YmY4ZDk2NzA0N2ExZTJm',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);

            $response = json_decode($response, true);
            // echo "<pre>";
            // print_r($response);

            $status_code = $response['tasks'][0]['status_code'];

            if($status_code === 20000){
                $result_count = $response['tasks'][0]['result'][0]['items_count'];

                
                $competiorsDatas = $response['tasks'][0]['result'][0]['items'];

                //Update credits
                $credits = auth()->user()->book_scout_credit;
                $update_credits = User::find(auth()->user()->id);
                $update_credits->book_scout_credit = $credits - 1;
                $update_credits->update();

                
                // return redirect()->route('product-competitors-data')->with(compact('result_count','competiorsDatas'));
                return view('pages.product-competitors-data', ['result_count' => $result_count, 'competiorsDatas'=> $competiorsDatas]);
            }
            else{
                return redirect()->route('product-competitors')->with('status', 'Something went wrong! Try again later!');
            } 
        }
        else{
            return redirect()->back()->with('status','You don\'t have any credits left for today!');
        }
        // print_r($response);
    }

    // public function view_product($asin){
    //     include (app_path().'/php_exe/simple_html_dom.php');
    //     $html = file_get_html("https://www.amazon.com/dp/B0B1ZPVLJX");
    //     return $html;
    //     // return $html->find("#title span", 0)->text();
    //     // return view('pages.competitor-product');
    // }
}
