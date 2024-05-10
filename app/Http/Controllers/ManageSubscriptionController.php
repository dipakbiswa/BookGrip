<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSubscriptionController extends Controller
{
    public function index(){
        return view('pages.manage-subscription');
    }
}
