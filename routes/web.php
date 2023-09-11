<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Befor_loginController;

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

Route::get('/', function () {
    return view('index');
});

Route::view('home', 'index');
Route::view('about', 'about_us');
Route::view('contact', 'contact');
Route::view('login', 'login');
Route::view('register', 'register');
Route::view('gallery', 'events');
Route::post('Insert_registration', [Befor_loginController::class, 'insert_registration']);
Route::get('account_activation/{email}',[Befor_loginController::class, 'account_activation']);