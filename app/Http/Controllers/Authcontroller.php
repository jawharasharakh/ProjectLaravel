<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Factory;

use User;


class Authcontroller extends Controller
{
     public function login(){
        return view('dashboard\auth\login');

    }

   public function authenticate(Request $request){
        //dd($request->toArray());
        $Login_data = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($Login_data)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard..homeDash');
        }
      
             return redirect()->back()->with('error', 'lagin failed' );

    
}


    public function logout(){

        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('frontside\home');


    }

    public function register(){
        return view ('dashboard\auth\register');
    }

    public function do_register(Request $request){

        $request->validate([
            'email'=>'required | email',
            'password'=>'required |confirmed' ,
            'name'=>'required'
            
        ]);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make ($request->password)
        ]);

        return redirect()->route('login')->with('success','user create successfiy');
    }
}
