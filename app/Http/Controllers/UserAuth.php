<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req)
    {
        $data = $req->input();
        $checkNumber  = sms_user::where('phone_number', '=', $data['phone-number'])->exists();
        $checkPassword = sms_user::where('password', '=', $data['password'])->exists();
        if ($checkNumber && $checkPassword) {
            $req->session()->put('user', $data['phone-number']);
            return redirect('dashboard');
        } else {
            return redirect('login')->with('fail', 'Invalid phone number or password');
        }
        // $req->session()->put('user', $data['phone-number']);

    }
}
