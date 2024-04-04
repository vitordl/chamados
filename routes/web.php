<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::get('/authLogin', [AuthController::class, 'login'])->name('authLogin');
Route::get('/authRegister', [AuthController::class, 'register'])->name('authRegister');


