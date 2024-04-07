<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Livewire\Main;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/', Main::class)->name('index');
    
});

Route::middleware('guest')->group(function(){
    Route::resource('register', RegisterController::class);
    
    Route::get('/login', function(){
        return view('auth.login');
    })->name('login');
    
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/auth', [LoginController::class, 'authenticate'])->name('authenticate');






