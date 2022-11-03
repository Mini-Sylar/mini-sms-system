<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SMS_User;

class Sign_up extends Controller
{
    //
    function addData(Request $req)
    {
        $user = new SMS_User;

        $user->first_name = $req->input('first-name');
        $user->last_name = $req->input('last-name');
        $user->email = $req->email;
        $user->country = $req->country;
        $user->password = $req->password;
        $user->phone_number = $req->input('phone-number');
        $user->save();
        return redirect('login');
    }
}
