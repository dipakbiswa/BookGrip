<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email , 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;
            $success['is_paid'] = $user->is_paid;

            $response = [
                'success'=> true,
                'data' => $success,
                'message' => 'User login successfully'
            ];

            return response()->json($response, 200);
            
        }else{
            $response = [
                'success'=> false,
                'message' => 'Unauthorighed'
            ];
            return response()->json($response);
        }
    }
}
