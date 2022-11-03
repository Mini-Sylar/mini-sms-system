<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;

class AddContact extends Controller
{
    //
    function addData(Request $req)
    {
        $contact = new sms_user_contact;

        $contact->full_name = $req->input('name');
        $contact->contact_number = $req->input('phone');
        $contact->user_id = $req->session()->get('user')['id'];
        $contact->save();
        // return redirect('login');
    }
}
