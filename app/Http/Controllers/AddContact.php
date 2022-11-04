<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sms_user_contact;
use App\Models\SMS_user;


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
        return back()->with('success', 'Contact created successfully!');
    }

    function showData()
    {
        // Show all where created by is user id
        $data =  sms_user_contact::where('created_by', session('user'))->get();
        return view('add-contacts', ['members' => $data]);
    }

    function delete($id)
    {
        $data = sms_user_contact::find($id);
        $data->delete();
        return back()->with('success', 'Contact deleted successfully!');
    }
}
