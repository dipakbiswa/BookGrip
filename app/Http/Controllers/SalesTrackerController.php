<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesTrackerController extends Controller
{
    public function index(){
        return view("pages.sales-tracker");
    }

    public function check(Request $request){
        $bsr = $request->bsr;
        $asin = $request->asin;

        $books = "";

        if($bsr>=1 && $bsr<=5 ){
            $books = ((7000-4000)/5)*(5-$bsr) + 4000;
        }
            
        if($bsr>=6 && $bsr<=20 ){ 
            $books = ((4000-3000)/(20-5))*(20-$bsr) + 3000;
        }
            
        if($bsr>=21 && $bsr<=35 ){
            $books = ((3000-2000)/(35-20))*(35-$bsr) + 2000;
        }
            
        if($bsr>=36 && $bsr<=100 ){
            $books = ((2000 - 1000)/(100-35))*(100-$bsr) + 1000;
        }
            
        if($bsr>=101 && $bsr<=200 ){
            $books = ((1000-500)/(200-100))*(200-$bsr) + 500;
        }
            
        if($bsr>=201 && $bsr<=350 ){
            $books = ((500-250)/(350-200))*(350-$bsr) + 250;
        }
            
        if($bsr>=351 && $bsr<=500 ){
            $books = ((250-175)/(500-350))*(500-$bsr) + 175;
        }
            
        if($bsr>=501 && $bsr<=750 ){
             $books = ((175-120)/(750-500))*(750-$bsr) + 120;
        }
            
        if($bsr>=751 && $bsr<=1500 ){
            $books = ((120-100)/(1500-750))*(1500-$bsr) + 100;
        }
            
        if($bsr>=1501 && $bsr<=3000 ){
            $books = ((100-70)/(3000-1500))*(3000-$bsr) + 70;
        }
            
        if($bsr>=3001 && $bsr<=5500 ){
            $books = ((70-25)/(5500-3000))*(5500-$bsr) + 25;
        }
            
        if($bsr>=5501 && $bsr<=10000 ){
            $books = ((25-15)/(10000-5500))*(10000-$bsr) + 15;
        }
            
        if($bsr>=10001 && $bsr<=50000){  
            $books = ((15-5)/(50000-10000))*(50000-$bsr) + 5;
        }
            
        if($bsr>=50001 && $bsr<=100000 ){
            $books = ((5-1)/(100000-50000))*(100000-$bsr) + 1;
        }
            
        if($bsr<1){
            $books = '-';
        }
            
        if($bsr>100000){
            $books="check";
        } 
        $books = intval($books);
        return view("pages.sales-tracker", compact('books'));        

    }
}
