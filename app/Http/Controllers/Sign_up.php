<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SMS_User;
use App\Models\analytic;

class Sign_up extends Controller
{
    //
    function addData(Request $req)
    {
        $user = new SMS_User;
        $analytics  = new analytic;
        $user->first_name = $req->input('first-name');
        $user->last_name = $req->input('last-name');
        $user->email = $req->email;
        $user->country = $req->country;
        $user->password = $req->password;
        
        $user->phone_number = $req->input('phone-number');

        $analytics->user_name = $req->input('phone-number');
        $analytics->number_of_messages_sent = 0;
        
        $user->save();
        $analytics->save();
        return redirect('login');
    }
}
