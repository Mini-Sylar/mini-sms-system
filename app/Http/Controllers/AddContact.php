<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\SMS_user;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class AddContact extends Controller
{
    //
    function addData(Request $req)
    {
        $contact = new sms_user_contact;
        $contact->full_name = $req->input('name');
        $contact->contact_number = $req->input('phone');
        // get id from session
        $contact->created_by = session('user');
        $contact->save();
        // prevent resubmission
        // $req->session()->flash('status', 'Contact added successfully!');
        // flash user with message
        // $req->session()->flash('status', 'Contact added successfully!');
        return back()->with('success', 'Item created successfully!');
    }
}
