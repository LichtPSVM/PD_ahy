<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class authController extends Controller
{
    public function login(){
        return view('auths.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        }
            return redirect('/login');
    }

    public function register(){
        return view('auths.register');
    }

    public function postregister(Request $request){
        $user = User::create([
            'nik' => $request->nik,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>str_random(60)
        ]);

        return redirect('/login');
    }
    

}
