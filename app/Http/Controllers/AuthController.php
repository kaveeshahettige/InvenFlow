<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //register user
    public function register(Request $request){

        //validate
        $fields=$request->validate([
            'name'=>['required','max:255'],
            'email'=>['required','email','max:255','unique:users'],
            'password'=>['required','min:5','max:255','confirmed'],
            

        ]);

        //register
        $user=User::create($fields);

        //login
        Auth::login($user);

        //redirect
        return redirect()->route('home');
    }

    //login user
    public function login(Request $request){

        //validate
        $fields=$request->validate([
            'email'=>['required','email','max:255'],
            'password'=>['required','min:5','max:255'],
            

        ]);

        //try to login the user
        if(Auth::attempt($fields,$request->remember)){
            //return redirect()->intended(); --->to the needed page
            return redirect()->intended('inventory');
        }else{
            return back()->withErrors(['failed'=>'Invalid credentials']);
        }
    }

    //logout user
    public function logout(Request $request){
        Auth::logout();

        //invalidate user's session
        $request->session()->invalidate();

        //regenerate CSRF token
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
