<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function login(Request $request){
        
        $loginData = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($LoginData)) {
            $user=Auth::user();
            $token = $user->createToken(' my api Token ')->accessToken;

            return response([
                'status'=>' success',
                'token'=>$token
               
            ]);
    }
    return response([
        'status'=>' error',
        'massege'=>'invalid'
       
    ]);

    }
}
