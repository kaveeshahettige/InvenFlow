<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){

        //validate
        $request->validate([
            'name'=>['required','max:255'],
            'email'=>['required','email','max:255'],
            'password'=>['required','min:5','max:255','confirmed'],
            

        ]);

        //register
        

        dd('ok');

        //login

        //redirect
    }
}
