<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sign_up;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddContact;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::view("sign-up", "sign-up");
Route::post("sign-up", [Sign_up::class, 'addData']);

// Login
Route::post("user", [UserAuth::class, 'userLogin']);
// Route::view("login", "login");
// Dashboard
Route::get('/dashboard', function () {
    //
    return view('dashboard');
})->middleware('tokenValid');
// Route::view("dashboard", "dashboard");

// Add contacts page
Route::view("contacts", "add-contacts")->middleware('tokenValid');
Route::post("contacts", [AddContact::class, 'addData']);
Route::get("contacts", [AddContact::class, 'showData']);

// login
Route::get('/login', function () {
    if (session()->has('user')) {
        return redirect('dashboard');
    }
    return view('login');
});



// Logout
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});
