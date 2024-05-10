<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        $notifications = Notification::orderBy('id', 'desc')->get();
        return view('pages.notification', compact('notifications'));
    }
}
