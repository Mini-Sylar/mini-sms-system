<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sign_up;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\AddContact;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\QuickMessageController;
use App\Http\Controllers\ResetPassWordController;

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
Route::get("dashboard", [DashboardController::class, 'showData']);;
// Add contacts page
Route::view("contacts", "add-contacts");
Route::post("contacts", [AddContact::class, 'addData']);
Route::get("contacts", [AddContact::class, 'showData']);

// Get specific contact
Route::view('contacts/edit/{id}', 'update-contact');
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
Route::post('/reset-password', [ResetPassWordController::class, 'sendResetEmail']);

// Logout
Route::get('/logout', function () {
    if (session()->has('user')) {
        session()->pull('user');
    }
    return redirect('login');
});


// Create group route
Route::view("groups", "groups");
Route::post("groups", [GroupsController::class, 'addGroup']);
Route::get("groups", [GroupsController::class, 'showData']);
// Delete Specific Group
Route::get("groups/delete/{id}", [GroupsController::class, 'delete']);
// Get specific Group
Route::view('groups/edit/{id}', 'update-contact');
Route::get('groups/edit/{id}', [GroupsController::class, 'edit']);
Route::post("groups/update/{id}", [GroupsController::class, 'update']);

// Quick Message
Route::view("quick-message", "quick-message");
Route::get("quick-message", [QuickMessageController::class, 'showData']);
Route::post("quick-message/send", [QuickMessageController::class, 'sendMessage']);

// Email View When Sent
Route::view('email-template', 'email-template');

// Update Password
Route::view("password/reset/{phone_number}", "change-password");

Route::get("password/reset/{phone_number}", ['uses' => '\App\Http\Controllers\ResetPassWordController@resetPassword']);
Route::post("password/reset/update", [ResetPassWordController::class, 'updatePassword']);
// add middleware to all routes
Route::middleware(['tokenValid'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'showData']);
    Route::get('contacts', [AddContact::class, 'showData']);
    Route::get('groups', [GroupsController::class, 'showData']);
    Route::get('quick-message', [QuickMessageController::class, 'showData']);
});
