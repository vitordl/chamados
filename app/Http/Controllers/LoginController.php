<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function create(){
        
    }


    public function authenticate(Request $request){
        $credentials = $request->validate([
            'user' => ['required'],
            'password' => ['required'],

        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }else{
            return redirect()->back()->with('erro', 'Usuario ou senha incorreto');
        }

    }


    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }


    
}
