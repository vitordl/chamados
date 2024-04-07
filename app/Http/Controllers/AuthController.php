<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        dd('logado!');
    }

    public function register(Request $request){
        // $user = new User();
        // $user->name = $request->get('user');
        // $user->email = $request->get('email');
        // $user->password = $request->get('password');
        // $user->repeat_password = $request->get('repeat_password');
        // $user->save();

        return view('auth.token');

        // dd('logado e registrado!');
    }
}
