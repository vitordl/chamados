<?php

namespace App\Http\Controllers;

use App\Mail\MailTest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    
    public function index(){

        return view('auth.register');
    }
  
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make($request->password);
        $user['my_token'] = rand(11111,999999);
        $user = User::create($user);

        $my_token = $user['my_token'];
        $usuario = $user['user'];

        
        Mail::to('vitor@teste.com')->send(new MailTest($my_token, $usuario));


        return redirect()->route('token')
        ->with('temp_token', 'active')
        ->with('user', $user->email);
   
    }

    public function token(){

       
        if(session('temp_token')){
            return view('auth.token');
        }

        return redirect()->route('index');

    }

    public function reg_token(Request $request){

        if(!empty($request->token)){
            $user = User::where('my_token', $request->token)
            ->where('status', 'inactive')
            ->first();

            if($user){
                Auth::login($user);
                $user->status = "active";
                $user->my_token = null;
                $user->save();
    
                return redirect()->route('index');
            }
        }
        
        
       
        return redirect()->route('token')
        ->with('temp_token', 'active')
        ->with('token_err', 'Token inválido. Por favor tente novamente.');
        

      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
