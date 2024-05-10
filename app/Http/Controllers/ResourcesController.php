<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    public function index(){
        return view("pages.resources");
    }

    public function images(){
        $api_url = 'https://bookgrip.com/api/image_resources.php';
        $json_data = file_get_contents($api_url);

        $results = json_decode($json_data);
        if(isset($results)){
            return view('pages.recources-image', compact('results'));
        }
    }

    public function docs(){
        $api_url = 'https://bookgrip.com/api/pdf_resources.php';
        $json_data = file_get_contents($api_url);

        $results = json_decode($json_data);
        if(isset($results)){
            return view('pages.recources-docs', compact('results'));
        }
    }
}
