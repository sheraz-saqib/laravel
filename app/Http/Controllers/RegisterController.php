<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('form');
    }
    public function register(Request $request){

        $request->validate(
            [
                'user_name'=>'required',
                'user_email'=>'required|email',
                'password' => 'required',
                'confirm_password'=>'required|same:password'
                // 'password'=>'required|confirmed',
                // 'password_confirmation'=>'required'
                
            ]
            );
        echo "<pre>";
        print_r($request->all());
    }
}
