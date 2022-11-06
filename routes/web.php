<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sign_up;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddContact;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\QuickMessageController;
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


// Dashboard
Route::view("dashboard", "dashboard")->middleware('tokenValid');
Route::get("dashboard", [DashboardController::class, 'showData'])->middleware('tokenValid');


// Add contacts page
Route::view("contacts", "add-contacts")->middleware('tokenValid');
Route::post("contacts", [AddContact::class, 'addData']);
Route::get("contacts", [AddContact::class, 'showData']);

// Get specific contact
Route::view('contacts/edit/{id}', 'update-contact')->middleware('tokenValid');
Route::get('contacts/edit/{id}', [AddContact::class, 'edit']);
Route::post("contacts/update/{id}", [AddContact::class, 'update']);
Route::get("contacts/delete/{id}", [AddContact::class, 'delete']);

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


// Create group route
Route::view("groups", "groups")->middleware('tokenValid');
Route::post("groups", [GroupsController::class, 'addGroup']);
Route::get("groups", [GroupsController::class, 'showData']);
// Delete Specific Group
Route::get("groups/delete/{id}", [GroupsController::class, 'delete']);
// Get specific Group
Route::view('groups/edit/{id}', 'update-contact')->middleware('tokenValid');
Route::get('groups/edit/{id}', [GroupsController::class, 'edit']);
Route::post("groups/update/{id}", [GroupsController::class, 'update']);

// Quick Message
Route::view("quick-message", "quick-message")->middleware('tokenValid');
Route::get("quick-message", [QuickMessageController::class, 'showData']);
